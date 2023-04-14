<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroFilme;
use App\Http\Controllers\cadastroFuncionario;
use App\Http\Controllers\cadastroSala;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/cadastro-filme',[cadastroFilme::class,'buscarCadastroFilme'])->name('buscar-cadastro-filme');

Route::post('/cadastro-filme', [cadastroFilme::class,'cadastrarFilme'])->name('cadastro-filme');

Route::get('/cadastro-funcionario',[cadastroFuncionario::class,'buscarCadastroFuncionario'])->name('buscar-cadastro-funcionario');
Route::post('/cadastro-funcionario', [cadastroFuncionario::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/gerenciar-funcionario', [cadastroFuncionario::class,'cadastrarFuncionario'])->name('gerenciar-funcionario');

Route::get('/cadastro-sala',[cadastroSala::class,'buscaCadastroSala']);
Route::get('/gerenciar-sala',[cadastroSala::class,'buscaCadastroSala']);
