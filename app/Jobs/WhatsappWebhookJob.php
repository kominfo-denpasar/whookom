<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;
use App\Models\whatsappMessages;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Http;
use App\Models\Transaksi;

class WhatsappWebhookJob extends SpatieProcessWebhookJob
{

    public WebhookCall $webhookCall;

    /**
     * Create a new job instance.
     */
    public function __construct(WebhookCall $webhookCall)
    {
        //
        $this->webhookCall = $webhookCall;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Process the webhook call
        $data = $this->webhookCall->payload;

        // Tentukan tipe pesan (group atau personal)
        $isGroup = Str::contains($data['from'], '@g.us');

        $type = 'text'; // default
        $content = null;
        $caption = null;
        $mime_type = null;

        // Deteksi tipe isi pesan
        if (isset($data['image'])) {
            $type = 'image';
            $content = $data['image']['media_path'] ?? null;
            $caption = $data['image']['caption'] ?? null;
            $mime_type = $data['image']['mime_type'] ?? null;
        } elseif (isset($data['document'])) {
            $type = 'document';
            $content = $data['document']['media_path'] ?? null;
            $caption = $data['document']['caption'] ?? null;
            $mime_type = $data['document']['mime_type'] ?? null;
        } elseif (isset($data['message']['text'])) {
            $type = 'text';
            $content = $data['message']['text'];
        }

        // Simpan ke database
        whatsappMessages::create([
            'message_id' => $data['message']['id'] ?? null,
            'from' => $data['from'],
            'pushname' => $data['pushname'],
            'type' => $type,
            'content' => $content,
            'caption' => $caption,
            'mime_type' => $mime_type,
            'is_group' => $isGroup,
            'timestamp' => $data['timestamp'],
        ]);

        return $this->postBlockchain($data, $type, $content, $caption, $mime_type, $isGroup);
        
        // return response()->json(['status' => 'ok']);
    }

    public function postBlockchain($data, $type, $content, $caption, $mime_type, $isGroup){
        // Step 1: Ambil token dari auth endpoint
        $authUrl = 'https://zglza29tiw5mbymtywmtaxbp.baliola.io/api/auth/login';

        $authResponse = Http::asForm()->post($authUrl, [
            'email' => 'diskominfo.denpasar@mail.com',
            'password' => 'aU9g0KuKYK)VEKF',
        ]);

        if (!$authResponse->successful()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mendapatkan token',
                'error' => $authResponse->body(),
            ], $authResponse->status());
        }

        $token = $authResponse['data']['access_token'];

        // Step 2: Gunakan token untuk request utama
        $apiUrl = 'https://zglza29tiw5mbymtywmtaxbp.baliola.io/api/e-certificate';
        $source_id = $data['message']['id'] ?? null;

        $payload = [
            "serialNumber" => $source_id,
            "from" => $data['from'],
            "pushname" => $data['pushname'],
            "type" => $type,
            "content" => $content,
            "caption" => $caption,
            "mimeType" => $mime_type,
            "isGroup" => $isGroup,
            "createdAt" => $data['timestamp']
        ];

        $apiResponse = Http::withToken($token)->post($apiUrl, $payload);

        if ($apiResponse->successful() && $apiResponse['status'] === true) {
            $data = $apiResponse['data'];
    
            // Step 3: Simpan ke Database
            $transaksi = Transaksi::create([
                'source_id'       => $source_id,
                'asset_hash'       => $data['asset_hash'],
                'transaction_hash' => $data['transaction_hash'],
                'onchain_url'      => $data['onchain_url'],
                'algorithm'        => $data['algorithm'],
                'signature'        => $data['signature'],
            ]);
    
            return response()->json([
                'status' => 'success',
                'message' => $apiResponse['message'],
                'stored_data' => $transaksi,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => $apiResponse->body()
            ], $apiResponse->status());
        }

    }
}
