<?php


namespace App\Shop;


use Illuminate\Http\Client\Factory;

class StripePaymentProvider implements PaymentContract
{

    public function __construct(private Factory $httpClient, private string $currency) {}

    public function charge(array $paymentDetails): array
    {
        // Charge through Stripe
        // $this->httpClient->put()

        return [
            'status' => 'success',
            'message' => 'We successfully charged '.$paymentDetails['amount']. ' from '.$paymentDetails['email']. ' through '.$this->getName()
        ];
    }

    public function getName(): string
    {
        return 'Stripe';
    }

}
