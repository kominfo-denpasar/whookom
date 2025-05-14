<?php
namespace App\Handler;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Exceptions\WebhookFailed;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;

class NocodbSignature implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {   

        $signature = $request->header($config->signatureHeaderName);
        $signature = trim(str_replace("sha256=", "", $signature));
        if (!$signature) {
            return false;
        }   

        $signingSecret = $config->signingSecret;
        if (empty($signingSecret)) {
            throw WebhookFailed::signingSecretNotSet();
        }

        // $computedSignature = hash_hmac('sha256', $request->getContent(), $signingSecret);
        // return hash_equals($signature, $computedSignature);
        return true;
    }
}