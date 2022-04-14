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
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\OrcamentoProdutoController;
use App\Models\Produto;

//ROTAS DAS REQUISIÇÕES
Route::get('/', [ClienteController::class, 'index']);
Route::get('/produto/showall', [ProdutoController::class, 'showall']);
Route::get('/orcamento/showall', [OrcamentoController::class, 'showall']);

/**
 * create -> MÉTODO/ACTION PADRÃO PARA INSERIR OS DADOS NO BANCO
 */
Route::get('/cliente/create', [ClienteController::class, 'create']);
Route::get('/endereco/create', [EnderecoController::class, 'create']);
Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::get('/orcamento/create', [OrcamentoController::class, 'create']);

/**
 * store -> MÉTODO/ACTION PADRÃO PARA ADICIONAR OS DADOS NO BANCO
 */
Route::post('cliente/', [ClienteController::class, 'store']);
Route::post('endereco/', [EnderecoController::class, 'store']);
Route::post('produto/', [ProdutoController::class, 'store']);
Route::post('orcamento/', [OrcamentoController::class, 'store']);


Route::get('/orcamento/add/{id}', [OrcamentoController::class, 'add']);
Route::post('orcamento/add', [OrcamentoController::class, 'addp']);
Route::post('orcamento/remove', [OrcamentoController::class, 'removep']);

/**
 * show -> MÉTODO/ACTION PADRÃO PARA EXIBIR OS DADOS DAS TABELAS
 */
Route::get('/cliente/{id}', [ClienteController::class, 'show']);
Route::get('/endereco/{id}', [EnderecoController::class, 'show']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
Route::get('/orcamento/{id}', [OrcamentoController::class, 'show']);



/**
 * delete -> MÉTODO/ACTION PADRÃO PARA DELETAR OS DADOS DAS TABELAS
 */
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy']);
Route::delete('/orcamento/{id}', [OrcamentoController::class, 'destroy']);


/**
 * update -> MÉTODO/ACTION PADRÃO PARA Atualizar OS DADOS DAS TABELAS
 */
Route::get('/produto/edit/{id}', [ProdutoController::class, 'edit']);
Route::put('/produto/update/{id}', [ProdutoController::class, 'update']);
Route::get('/orcamento/edit/{id}', [OrcamentoController::class, 'edit']);
Route::put('/orcamento/update/{id}', [OrcamentoController::class, 'update']);


Route::get('/listar', function () {
    return view('listar');
});

Route::get('/listar/{id}', function ($id) {
    return view('listarid', [
        'id' => $id
    ]);
});
