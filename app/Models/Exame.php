<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'laboratorio',
        'registro_ms',
        'perguntas',
        'preco',
        'estoque',
        'lote',
        'bibliografia'
    ];

    protected $casts = [
        'perguntas' => 'array'
    ];
}
