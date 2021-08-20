<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ----eventos-----
Route::get('/', [EventsController::class, 'index']);//mostrar os registros
Route::get('/events/criar', [EventsController::class, 'create'])->middleware('auth');//formulario de criacao
Route::get('/events/{id}', [EventsController::class, 'show']);//mostrar dados especificos
Route::post('/events', [EventsController::class, 'store']); //envia dados no banco
// ------endEventos-----

// ----contatos-----
Route::get('/contactos', [ContatoController::class,'index']);
// ----endContatos-----



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
