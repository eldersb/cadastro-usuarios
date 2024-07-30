<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutosController;
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
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produto');


Route::get('cliente/cadastro', [ClienteController::class, 'create'])->name('cadastro.create');
Route::post('cliente/cadastro', [ClienteController::class, 'store'])->name('cadastro.store');
Route::get('cliente/exibir/{id}', [ClienteController::class, 'show'])->name('cliente.show');

Route::get('cliente/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/editar/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('cliente/editar/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('produtos/cadastro', [ProdutosController::class, 'create'])->name('produto.cadastro.create');



// Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
// Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');



