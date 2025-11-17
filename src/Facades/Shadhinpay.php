<?php

namespace Xeronce\Shadhinpay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array pay($amount, $metadata = [])
 * @method static array verify($trxId)
 */
class Shadhinpay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'shadhinpay';
    }
}
