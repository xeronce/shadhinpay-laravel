<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shadhinpay API Credentials
    |--------------------------------------------------------------------------
    */
    'client_id'    => env('SHADHINPAY_CLIENT_ID', ''),
    'business_id'    => env('SHADHINPAY_BUSINESS_KEY', ''),
    'secret_key' => env('SHADHINPAY_SECRET_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Shadhinpay API Base URL
    |--------------------------------------------------------------------------
    */
    'base_url' => 'https://request.shadhinpay.com',

];
