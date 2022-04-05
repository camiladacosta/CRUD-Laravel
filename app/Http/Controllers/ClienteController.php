<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();

        /**
         * ENVIANDO PARA A VIEW / = 'welcome' TODOS OS CLIENTES DO BANCO
         */
        return view('welcome',['cliente' => $cliente]);
    }

    /**
     * create-> MÉTODO/ACTION PADRÃO PARA CRIAR NOVO CAMPO (CLIENTE)
     */
    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        /**
         * INSTANCIANDO A CLASSE Cliente DO MODEL
         */
        $cliente = new Cliente;

        $cliente-> nome = $request->nome;
        $cliente-> cpf = $request->cpf;
        $cliente-> email = $request->email;
        $cliente-> nacionalidade = $request->nacionalidade;
        $cliente-> endereco_id = $request->endereco_id;
        $cliente-> telefone_id = $request->telefone_id;
        $cliente-> profissao = $request->profissao;

        /**
         * SALVAR OS DADOS PEGOS DA VIEW NO BANCO
         */
        $cliente->save();

        return redirect('/')->with('msg', 'Cliente Cadastrado com Sucesso!');
    }
}
