<?php

namespace App\Models;

class Amount
{
    public $currency;
    public $amount;

    public function __construct($amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
}
