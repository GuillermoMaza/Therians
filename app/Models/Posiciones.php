<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posiciones extends Model
{
    protected $fillable = [
        'posicion',
        'duracion',
        'round',
        'cantidad'
    ];
}
