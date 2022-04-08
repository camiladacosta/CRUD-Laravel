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

/**
 * create -> MÉTODO/ACTION PADRÃO PARA INSERIR OS DADOS NO BANCO
 */
Route::get('/cliente/create', [ClienteController::class, 'create']);
Route::get('/endereco/create', [EnderecoController::class, 'create']);

/**
 * store -> MÉTODO/ACTION PADRÃO PARA ADICIONAR OS DADOS NO BANCO
 */
Route::post('cliente/', [ClienteController::class, 'store']);
Route::post('endereco/', [EnderecoController::class, 'store']);

/** show -> MÉTODO/ACTION PADRÃO PARA EXIBIR OS DADOS DAS TABELAS */
Route::get('/cliente/{id}', [ClienteController::class, 'show']);
Route::get('/endereco/{id}', [EnderecoController::class, 'show']);

Route::get('/listar', function () {
    return view('listar');
});

Route::get('/listar/{id}', function ($id) {
    return view('listarid',[
        'id' => $id
    ]);
});
