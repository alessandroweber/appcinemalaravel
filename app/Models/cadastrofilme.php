<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastrofilme extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_filme',
        'atores_filme',
        'data_lancamento_filme',
        'sinopse_filme',
        'capa_filme'
    ];
}
