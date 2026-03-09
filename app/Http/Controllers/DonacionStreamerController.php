<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonacionStreamer;

class DonacionStreamerController extends Controller
{
    public function store(Request $request)
    {
        $validado = $request->validate([
            'usuario_streamer' => 'required',
            'usuario_viewer' => 'required',
            'monto' => 'required',
            'accion' => 'required',
            'sonido' => 'required'
        ]);

        $donacionStreamer = DonacionStreamer::create($validado);
        return response()->json($donacionStreamer, 201);
    }


    public function index(){
        return 'hola';
    }


}
