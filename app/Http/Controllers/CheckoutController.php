<?php

namespace App\Http\Controllers;

use App\Payment\PaymentContract;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckoutController extends Controller
{
    public function __invoke(Request $request, PaymentContract $paymentProvider): Response
    {
        $paymentProvider->charge($request->get('email'), $request->get('amount'));

        $message = 'Successfully charged '.$paymentProvider->currency.$request->get('amount').' from '.$request->get('email').' via '.$paymentProvider->getName();

        return response($message);
    }
}
