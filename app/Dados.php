<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{
    protected $fillable = [
        'n_pessoas', 'n_criancas', 'bebida_alcool', 'tempo', 'periodo_usado', 'faixa_etaria', 'clima', 'estacao', 'feriado', 'promocao', 'dia_semana'
    ];
    public $timestamps = false;
}
