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
Route::get('/', [EventsController::class, 'index']);
Route::get('/events/criar', [EventsController::class, 'create']);
// ------endEventos-----

// ----contatos-----
Route::get('/contactos', [ContatoController::class,'index']);
// ----endContatos-----


// ----produtos-----
Route::get('/produtos', [ProdutoController::class,'index']);

Route::get('/produtos/{id}', function ($id = null) {
    return view('produtos',['id'=>$id]);
});
// ----endProdutos-----