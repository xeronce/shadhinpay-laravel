<?php

use Illuminate\Support\Facades\Route;
use Xeronce\Shadhinpay\Http\Controllers\PaymentController;
use Xeronce\Shadhinpay\Http\Controllers\ShadhinpayController;
use Xeronce\Shadhinpay\Http\Controllers\WebhookController;

Route::prefix('shadhinpay')->group(function () {

    Route::post('/', [ShadhinPayController::class, 'connectionStatus']);
    Route::post('/pay', [PaymentController::class, 'create']);
    Route::get('/verify/{trxId}', [PaymentController::class, 'verify']);

    // Webhook endpoint
    Route::post('/webhook', [WebhookController::class, 'handle']);

});
