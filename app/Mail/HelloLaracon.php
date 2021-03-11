<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class HelloLaracon extends Mailable
{
    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->view('emails.hello-laracon');
    }
}
