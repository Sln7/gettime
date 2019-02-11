<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    protected $fillable = [
        'lugares', 'status', 'previsao',
    ];
}
