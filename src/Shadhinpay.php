<?php

namespace Xeronce\Shadhinpay;

use Illuminate\Support\Facades\Http;

class Shadhinpay
{
    /**
     * Create a payment
     */
    public function pay($amount, $metadata = [])
    {
        $response = Http::withHeaders([
            'API-KEY' => config('shadhinpay.api_key'),
        ])->post(config('shadhinpay.base_url') . '/payment', [
            'amount'   => $amount,
            'metadata' => $metadata,
        ]);

        return $response->json();
    }

    /**
     * Verify payment
     */
    public function verify($trxId)
    {
        $response = Http::get(config('shadhinpay.base_url') . "/verify/{$trxId}");

        return $response->json();
    }
}
