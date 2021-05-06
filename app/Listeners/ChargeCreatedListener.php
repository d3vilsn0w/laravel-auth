<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class ChargeCreatedListener implements ShouldQueue
{
    public function handle(CoinbaseWebhookCall $webhookCall)
    {
        // do your work here

        // you can access the payload of the webhook call with `$webhookCall->payload`
        Log::debug("Listerner Log started");
        Log::debug($webhookCall->payload);
        Log::debug("Endedd");
    }
}
