<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DollarRate extends Model
{
    protected $table = 'dollar_rates';
    protected $fillable = ['rate'];
}
