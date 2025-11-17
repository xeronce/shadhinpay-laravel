<?php

namespace Xeronce\Shadhinpay\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // validate signature etc.
        return response()->json(['received' => true]);
    }
}
