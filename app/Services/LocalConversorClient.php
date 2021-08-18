<?php

namespace App\Services;

use App\Models\Currency;
use Illuminate\Support\Facades\Http;

class LocalConversorClient implements ConversionClient
{
    public function getValue(Currency $from, Currency $to): float {
        return $from->rates()->where('destination_currency_id', $to->id)->first()->value;
    }
}
