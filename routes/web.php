<?php

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

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\BaixaController;

Route::get('/', [LoginController::class, 'index']);

Route::get('/loginBD', function () {
    return view('loginBD');
});

Route::get('/novoproduto', function () {
    return view('novoproduto');
});

Route::get('/listaprodutos',[ProdutoController::class,'index']);

Route::get('/darbaixa',[ProdutoController::class,'indexbaixa']);

Route::post('/produtos',[ProdutoController::class,'store']);

Route::post('/atualizarproduto',[ProdutoController::class,'update']);

Route::post('/qtdatualizada',[BaixaController::class,'store']);

Route::get('/editar/{id}',[ProdutoController::class,'edit']);

Route::get('/excluir/{id}',[ProdutoController::class,'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/relatorio',[BaixaController::class,'relatorio']);

Route::post('/relatoriofiltro',[BaixaController::class,'relatoriofiltro']);
