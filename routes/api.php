<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionStreamerController;
use App\Http\Controllers\PosicionesController;
use App\Http\Controllers\TheriansController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/nuevoTherian',[TheriansController::class,'aparearTherian']);