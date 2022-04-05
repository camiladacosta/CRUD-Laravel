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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\TelefoneController;


//ROTAS DAS REQUISIÇÕES
Route::get('/', [ClienteController::class, 'index']);
Route::get('/cliente/create', [ClienteController::class, 'create']);

/**
 * ENDEREÇO
 */
Route::get('/endereco/create', [EnderecoController::class, 'create']);

/**
 * TELEFONE
 */
Route::get('/telefone/create', [TelefoneController::class, 'create']);

/**
 * store -> MÉTODO/ACTION PADRÃO PARA ADICIONAR OS DADOS NO BANCO
 */
Route::post('cliente/', [ClienteController::class, 'store']);
Route::post('endereco/', [EnderecoController::class, 'store']);
Route::post('telefone/', [TelefoneController::class, 'store']);

Route::get('/listar', function () {
    return view('listar');
});

Route::get('/listar/{id}', function ($id) {
    return view('listarid',[
        'id' => $id
    ]);
});
