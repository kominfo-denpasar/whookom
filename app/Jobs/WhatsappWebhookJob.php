<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;
use App\Models\whatsappMessages;
use Illuminate\Support\Str;

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

        return response()->json(['status' => 'ok']);
    }
}
