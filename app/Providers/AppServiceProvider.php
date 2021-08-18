<?php

namespace App\Providers;

use App\Services\ConversionClient;
use App\Services\LocalConversorClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */ 
    public function register()
    {
        $this->app->bind(ConversionClient::class, LocalConversorClient::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
