<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClienteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');

Route::get('/cliente/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/editar/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/cliente/editar/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');



Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');



