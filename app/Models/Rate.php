<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function from()
    {
        return $this->belongsTo(Currency::class);
    }

    public function to()
    {
        return $this->belongsTo(Currency::class, 'destination_currency_id');
    }
}
