<?php

namespace App\Services;

use App\Models\Currency;

interface ConversionClient
{
    public function getValue(Currency $from, Currency $to): float;
}
