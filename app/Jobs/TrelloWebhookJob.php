<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;

class TrelloWebhookJob extends SpatieProcessWebhookJob
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

        // log
        activity('webhook_trello')
            ->causedBy($this->webhookCall)
            ->log(json_encode($data))
            ->createdAt(now());
    
        // if ($data['event'] == 'charge.success') {
        //     // take action since the charge was success
        //     // Create order
        //     // Sed email
        //     // Whatever you want
        //     Log::info($data);
        // }

        //Acknowledge you received the response
        http_response_code(200);
    }
}
