<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    protected $table = 'cartoes';
    protected $fillable = [
        'nome',
        'numero_cartao',
        'validade',
        'cvv',
        'cpf',
    ];
}
