<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function __construct(public Request $request) {}


    public function __invoke(): RedirectResponse
    {
        // Charge user

        return $this->redirectWithMessage('error', 'There was an issue during the payment process 😢');
    }









    private function redirectWithMessage(string $status, string $message): RedirectResponse
    {
        return back()->with($status, $message);
    }
}
