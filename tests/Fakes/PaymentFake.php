<?php


namespace Tests\Fakes;


use App\Shop\PaymentContract;
use Illuminate\Http\Client\Factory;

class PaymentFake
{

    public function charge(array $paymentDetails): array
    {
        return [
            'status' => 'success',
            'message' =>'fake charge is working'
        ];
    }

    public function getName(): string
    {
        return 'FakePayment';
    }
}
