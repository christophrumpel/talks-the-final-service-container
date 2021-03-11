<?php

namespace App\Providers;

use App\Shop\PaddlePaymentProvider;
use App\Shop\PaymentContract;
use App\Shop\StripePaymentProvider;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

        $this->app->bind(PaymentContract::class, function(){
            return new StripePaymentProvider(resolve(Factory::class), config('payment.currency'));
        });
    }

    public function boot(): void
    {
        //
    }
}
