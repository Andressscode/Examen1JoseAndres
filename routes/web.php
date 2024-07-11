<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/apuestas', [ApuestaController::class, 'index']);
Route::get('/apuestas/jugadores', [ApuestaController::class, 'apuestasPorJugadores']);
Route::get('/apuestas/comparar', [ApuestaController::class, 'compararApuestas']);
Route::get('/apuestas/buscar', [ApuestaController::class, 'buscarPorJuego']);
Route::post('/apuestas', [ApuestaController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});
