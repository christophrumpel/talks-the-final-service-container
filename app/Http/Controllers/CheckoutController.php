<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckoutController extends Controller
{
    public function __invoke(Request $request): Response
    {

        // Charge user

        return response('message');
    }
}
