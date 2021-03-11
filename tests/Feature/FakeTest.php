<?php

namespace Tests\Feature;

use App\Shop\PaymentContract;
use App\Shop\StripePaymentProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Fakes\PaymentFake;
use Tests\TestCase;

class FakeTest extends TestCase
{

    public function it_fakes_my_payment_provider(): void
    {
        // fake it
    }
}
