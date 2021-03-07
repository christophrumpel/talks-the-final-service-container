<?php

namespace App\Payment;

interface PaymentContract {

    public function getName(): string;

    public function charge(string $email, int $amount): bool;

}
