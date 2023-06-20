<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAgenda;

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

Route::get('/',[controllerAgenda::class,'MostrarContato'])->name('contatos');
Route::post('/cadastro-agenda',[controllerAgenda::class, 'cadastrarAgenda'])->name('cadastro-agenda');
