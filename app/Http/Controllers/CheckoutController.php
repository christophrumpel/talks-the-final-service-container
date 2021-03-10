<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckoutController extends Controller
{

    public function __construct(public Request $request) {}


    public function __invoke()
    {
        // Charge user

        return back()->with('error', 'There was an issue during the payment process 😢');
    }
}
