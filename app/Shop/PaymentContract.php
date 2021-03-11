<?php

namespace App\Shop;

use Illuminate\Http\Client\Factory;

interface PaymentContract
{
    public function __construct(Factory $httpClient, string $currency);

    public function charge(array $paymentDetails): array;

    public function getName(): string;
}
