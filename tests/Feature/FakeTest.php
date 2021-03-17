<?php

namespace Tests\Feature;

use App\Shop\PaymentContract;
use App\Shop\StripePaymentProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\Fakes\PaymentFake;
use Tests\TestCase;

class FakeTest extends TestCase
{

    /** @test */
    public function it_fakes_my_payment_provider(): void
    {
        $this->assertInstanceOf(StripePaymentProvider::class, resolve(PaymentContract::class));

        // fake it
        StripePaymentProvider::fake();

        $this->assertInstanceOf(PaymentFake::class, resolve(PaymentContract::class));
    }
}
