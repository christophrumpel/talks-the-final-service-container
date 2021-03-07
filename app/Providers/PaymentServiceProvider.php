<?php

namespace App\Providers;

use App\Payment\PaddlePaymentProvider;
use App\Payment\PaymentContract;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(PaymentContract::class, function($app){
            return new PaddlePaymentProvider($app->make(Factory::class), 'EUR');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
