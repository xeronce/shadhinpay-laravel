<?php

namespace Xeronce\Shadhinpay;

use Illuminate\Support\ServiceProvider;

class ShadhinpayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');

        // Publish config
        $this->publishes([
            __DIR__.'/config/shadhinpay.php' => config_path('shadhinpay.php'),
        ], 'shadhinpay-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/shadhinpay.php',
            'shadhinpay'
        );

        // Bind the service class
        $this->app->singleton('shadhinpay', function () {
            return new Shadhinpay();
        });
    }
}
