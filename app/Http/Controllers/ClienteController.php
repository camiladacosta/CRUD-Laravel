<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Controllers\EnderecoController;

class ClienteController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        /**
         * Pesquisar por id
         */
        $endereco = request('endereco');
=======
    //ROTA INDEX PARA DIRECIONAR PARA welcome.blade
    public function index(){
         return view('welcome');
    }
>>>>>>> main

    public function showall()
    {
        $endereco = request('endereco');
        $search = request('search');
        if ($search) {
<<<<<<< HEAD
            $cliente = Cliente::where('nome', 'like', '%' . $search . '%')->get(); //get para pegar o registo
=======
            $cliente = Cliente::where('nome', 'like', '%' . $search . '%') //BUSCA PELO NOME
            ->orWhere('cpf', 'like', '%' . $search . '%') //BUSCA PELO CPF
           /**
            * PESQUISAR POR MUNICIPIO E BAIRRO
            */
            ->get(); //get para pegar o registo
>>>>>>> main
        } else {
            $cliente = Cliente::all();
        }

<<<<<<< HEAD
        /**
         * ENVIANDO PARA A VIEW / = 'welcome' TODOS OS CLIENTES DO BANCO
         */
        return view('welcome', ['cliente' => $cliente, 'search' => $search, 'endereco' => $endereco]);
=======
        return view('cliente/showall', ['cliente' => $cliente, 'search' => $search]);
>>>>>>> main
    }

    /**
     * create-> MÉTODO/ACTION PADRÃO PARA CRIAR NOVO CAMPO (CLIENTE)
     */
<<<<<<< HEAD
    public function create()
    {
        return view('cliente.create');
=======
    public function create(){
        $endereco = Endereco::all();

        return view('cliente.create', ['endereco' => $endereco]);
>>>>>>> main
    }

    public function store(Request $request)
    {
        /**
         * INSTANCIANDO A CLASSE Cliente DO MODEL
         */
        $cliente = new Cliente;

<<<<<<< HEAD
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->nacionalidade = $request->nacionalidade;
        $cliente->endereco_id = $request->endereco_id;
        $cliente->telefone = $request->telefone;
        $cliente->profissao = $request->profissao;

        //$endereco-> cidade = $request-> cidade;//testeeeee

        //$cliente-> endereco = $endereco;//testeeee

=======
        $cliente-> nome = $request->nome;
        $cliente-> cpf = $request->cpf;
        $cliente-> email = $request->email;
        $cliente-> nacionalidade = $request->nacionalidade;
        $cliente-> endereco_id = $request->endereco_id;
        //$cliente-> endereco_id = $endereco->id;
        $cliente-> telefone = $request->telefone;
        $cliente-> profissao = $request->profissao;

>>>>>>> main
        /**
         * SALVAR OS DADOS PEGOS DA VIEW NO BANCO
         */
        $cliente->save();

        return redirect('/')->with('msg', 'Cliente Cadastrado com Sucesso!');
    }
    /**
     * FUNÇÃO PARA EXIBIR DADOS DO CLIENTE FILTRANDO POR ID E ENDEREÇO RESGATADOS DO BANCO
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        //$endereco = Endereco::find($id); //RETORNA COM O ID DO ENDERECO REFERENTE AO ID DO CLIENTE E NÃO AO DADO PRESENTE NO BANCO
        $endereco = Endereco::find($cliente->endereco_id);//RETORNA COM O ID DO ENDERECO REFERENTE AO CLIENTE
        return view('cliente.show', ['cliente' => $cliente, 'endereco' => $endereco]);//só funciona se o id dos dois for igual
        //return view('cliente.show', ['cliente' => $cliente]);
    }
}
