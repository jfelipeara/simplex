<?php

namespace App\Services;

use App\Models\Currency;

class ExternalConversorClient implements ConversionClient
{
    public function getValue(Currency $from, Currency $to): float {
        $query = "{$from->code}_{$to->code}";
        $apiKey = env('CURRENCY_API_KEY');
        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apiKey}");
        $obj = json_decode($json, true);

        $val = floatval($obj["$query"]);
        return $val;
    }
}
