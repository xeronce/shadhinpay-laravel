<?php

namespace Xeronce\Shadhinpay\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xeronce\Shadhinpay\Facades\Shadhinpay;

class ShadhinpayController extends Controller
{
    public function connectionStatus()
    {
        return view('connection');
    }
}
