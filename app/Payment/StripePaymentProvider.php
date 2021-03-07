<?php

namespace App\Payment;

use Illuminate\Http\Client\Factory;

class StripePaymentProvider implements PaymentContract
{

    public function __construct(private Factory $httpClient, public string $currency) {}

    public function getName(): string
    {
        return 'Stripe';
    }

    public function charge(string $email, $amount): bool
    {
        // Charge user
       $this->httpClient->get(config('services.payment.stripe'));

        return true;
    }
}
