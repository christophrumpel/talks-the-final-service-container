<?php

namespace App\Http\Controllers;

use App\Shop\PaddlePaymentProvider;
use App\Shop\PaymentContract;
use App\Shop\StripePaymentProvider;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function __construct(public Request $request) {}


    public function __invoke(PaymentContract $paymentProvider): RedirectResponse
    {
        // Charge user
        $paymentResponse = $paymentProvider->charge($this->request->only('email', 'amount'));

        return $this->redirectWithMessage($paymentResponse['status'], $paymentResponse['message']);
    }









    private function redirectWithMessage(string $status, string $message): RedirectResponse
    {
        return back()->with($status, $message);
    }
}
