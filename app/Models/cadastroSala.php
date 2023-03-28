<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroSala extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_sala',
        'poltronas_sala',
    ];
}
