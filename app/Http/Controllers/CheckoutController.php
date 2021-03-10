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

        return back()->with('error', 'There was an issue during the payment process 😢');
    }
}
