<?php

namespace App\Services;

use App\Models\Amount;
use App\Models\Currency;

class ConversionService
{
    protected $conversor;

    public function __construct(ConversionClient $conversor)
    {
        $this->conversor = $conversor;
    }

    public function convert(Amount $amount, Currency $currency)
    {
        return $this->conversor->getValue($amount->currency, $currency) * $amount->amount;
    }
}
