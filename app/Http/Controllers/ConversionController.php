<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use App\Models\Currency;
use App\Services\ConversionService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConversionController extends Controller
{
    protected $conversionService;

    public function __construct(ConversionService $conversionService)
    {
        $this->conversionService = $conversionService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $fromCurrency = Currency::firstWhere(['code' => Str::upper($request->from)]);
        $toCurrency = Currency::firstWhere(['code' => Str::upper($request->to)]);
        $amount = new Amount($request->amount, $fromCurrency);
        return $this->conversionService->convert($amount, $toCurrency);
    }
}
