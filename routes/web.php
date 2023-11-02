<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventoController;
Route::get('/',[EventoController::class, 'index']);
Route::get('/eventos/cadastrar',[EventoController::class, 'cadastrar']);
Route::get('/cadastrar-conta', [EventoController::class, 'cadastrarConta']);
Route::get('/eventos', [EventoController::class, 'eventos']);
Route::get('/entrar', [EventoController::class, 'entrar']);
Route::get('/evento/{id}', [EventoController::class, 'evento']);
