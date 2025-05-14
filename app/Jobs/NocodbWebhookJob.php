<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;

use App\Traits\Notifikasi;

class NocodbWebhookJob extends SpatieProcessWebhookJob
{
    use Notifikasi;

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

        // log
        activity('webhook_nocodbss')
            ->causedBy($this->webhookCall)
            ->log(json_encode($data));

        // kirim notifikasi
        $data = [
            'phone' => '6281238921686',
            'message' => 'Webhook Nocodb: '.json_encode($data)
        ];
        $kirim = $this->kirimWhatsapp($data);
    
        // if ($data['event'] == 'charge.success') {
        //     // take action since the charge was success
        //     // Create order
        //     // Sed email
        //     // Whatever you want
        //     Log::info($data);
        // }

        //Acknowledge you received the response
        if($kirim) {
            http_response_code(200);
        } else {
            dd($kirim);
        }
        
    }
}
