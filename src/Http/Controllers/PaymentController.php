<?php

namespace Xeronce\Shadhinpay\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xeronce\Shadhinpay\Facades\Shadhinpay;

class PaymentController extends Controller
{
    public function create(Request $request): array
    {
        return Shadhinpay::pay(
            $request->input('amount'),
            $request->input('metadata', [])
        );
    }

    public function verify($trxId): array
    {
        return Shadhinpay::verify($trxId);
    }
}
