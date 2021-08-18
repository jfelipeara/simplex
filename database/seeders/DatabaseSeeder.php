<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Rate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usd =Currency::factory()->create(['code' => 'USD','name' => 'dolar']);
        $cop =Currency::factory()->create(['code' => 'COP','name' => 'peso']);
        $eur = Currency::factory()->create(['code' => 'EUR','name' => 'euro']);
        $arg = Currency::factory()->create(['code' => 'ARGS','name' => 'peso argentino']);

        Rate::factory()->create([
            'currency_id' => $usd->id,
            'destination_currency_id' => $cop->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $usd->id,
            'destination_currency_id' => $eur->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $usd->id,
            'destination_currency_id' => $arg->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $cop->id,
            'destination_currency_id' => $usd->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $cop->id,
            'destination_currency_id' => $eur->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $cop->id,
            'destination_currency_id' => $arg->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $eur->id,
            'destination_currency_id' => $usd->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $eur->id,
            'destination_currency_id' => $cop->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $eur->id,
            'destination_currency_id' => $arg->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $arg->id,
            'destination_currency_id' => $cop->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $arg->id,
            'destination_currency_id' => $usd->id, 
        ]);

        Rate::factory()->create([
            'currency_id' => $arg->id,
            'destination_currency_id' => $eur->id, 
        ]);
    }
}
