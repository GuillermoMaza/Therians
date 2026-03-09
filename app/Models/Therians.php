<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therians extends Model
{
    protected $fillable = [
        'nombre',
        'raza',
        'edad'
    ];
}
