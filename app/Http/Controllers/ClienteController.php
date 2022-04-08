<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Controllers\EnderecoController;

class ClienteController extends Controller
{
    public function index()
    {
        /**
         * Pesquisar por id
         */
        $endereco = request('endereco');

        $search = request('search');
        if ($search) {
            $cliente = Cliente::where('nome', 'like', '%' . $search . '%')->get(); //get para pegar o registo
        } else {
            $cliente = Cliente::all();
        }

        /**
         * ENVIANDO PARA A VIEW / = 'welcome' TODOS OS CLIENTES DO BANCO
         */
        return view('welcome', ['cliente' => $cliente, 'search' => $search, 'endereco' => $endereco]);
    }

    /**
     * create-> MÉTODO/ACTION PADRÃO PARA CRIAR NOVO CAMPO (CLIENTE)
     */
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        /**
         * INSTANCIANDO A CLASSE Cliente DO MODEL
         */
        $cliente = new Cliente;
        $endereco = new Endereco;

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->nacionalidade = $request->nacionalidade;
        $cliente->endereco_id = $request->endereco_id;
        $cliente->telefone = $request->telefone;
        $cliente->profissao = $request->profissao;

        //$endereco-> cidade = $request-> cidade;//testeeeee

        //$cliente-> endereco = $endereco;//testeeee

        /**
         * SALVAR OS DADOS PEGOS DA VIEW NO BANCO
         */
        //cliente.set(endereco)



        $cliente->save();

        return redirect('/')->with('msg', 'Cliente Cadastrado com Sucesso!');
    }
    /**
     * FUNÇÃO PARA EXIBIR DADOS DO CLIENTE FILTRANDO POR ID E ENDEREÇO RESGATADOS DO BANCO
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        $endereco = Endereco::findOrFail($id);
        return view('cliente.show', ['cliente' => $cliente, 'endereco' => $endereco]);
    }
}
