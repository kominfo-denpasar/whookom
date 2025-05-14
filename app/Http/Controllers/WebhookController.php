<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessWebhookJob;

class WebhookController extends Controller
{
    //
    public function handle(Request $request)
    {
        // Send payload to job for processing
        ProcessWebhookJob::dispatch($request->all());
        
        // Perform actions based on the webhook data
        return response()->json(['success' => true]);
    }
}
