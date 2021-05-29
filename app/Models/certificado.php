<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    protected $fillable = ['nome', 'palestrante', 'tema', 'data', 'horario', 'diretor'];
}
