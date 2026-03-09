<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonacionStreamer extends Model
{

    protected $table = "donacionstreamer";
    protected $fillable = [
        'usuario_streamer',
        'usuario_viewer',
        'monto',
        'accion',
        'sonido'
    ];
}
