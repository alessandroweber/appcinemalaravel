<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\FuncionarioController;
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


Route::get('/cadastro-filme',[FilmeController::class,'buscarCadastroFilme'])->name('buscar-cadastro-filme');

Route::post('/cadastro-filme', [FilmeController::class,'cadastrarFilme'])->name('cadastro-filme');

Route::get('/cadastro-funcionario',[FuncionarioController::class,'buscarCadastroFuncionario'])->name('buscar-cadastro-funcionario');
Route::post('/cadastro-funcionario', [FuncionarioController::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/gerenciar-funcionario', [FuncionarioController::class,'cadastrarFuncionario'])->name('gerenciar-funcionario');

