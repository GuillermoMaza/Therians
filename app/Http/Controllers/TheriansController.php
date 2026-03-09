<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Therians;

class TheriansController extends Controller
{

    public function aparearTherian(Request $request)
    {
        $validarTherian = $request->validate([
            'nombre' => 'required',
            'raza' => 'required',
            'edad' => 'required'
        ]);

        $nuevoTherians = Therians::create($validarTherian);
        return response()->json($nuevoTherians);
    }

    public function patearTherian()
    {

    }

    public function tasajearTherian()
    {

    }

    public function colgarTherian(){

    }

}
