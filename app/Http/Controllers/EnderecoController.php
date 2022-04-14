<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    // public function index(){
    //     $search = request('search');
    //     if($search){
    //         $endereco = Endereco::where(['id','like','%'.$search.'%'])->get();//get para pegar o registo
    //     }else{
    //         $endereco = Endereco::all();
    //     }
    //     /**
    //      * ENVIANDO PARA A VIEW / = 'listar' TODOS OS ENDEREÇOS DO BANCO
    //      */
    //     return view('endereco',['endereco' => $endereco]);
    // }

    public function showall()
    {
        $search = request('search');
        if ($search) {
            $endereco = Endereco::where('id', 'like', '%' . $search . '%')->get(); //get para pegar o registo
        } else {
            $endereco = Endereco::all();
        }

        return view('endereco/showall', ['endereco' => $endereco, 'search' => $search]);
    }

    /**
     * create-> MÉTODO/ACTION PADRÃO PARA CRIAR NOVO CAMPO (ENDERECO)
     */
    public function create(){
        return view('endereco.create');
    }

    public function store(Request $request){
        /**
         * INSTANCIANDO A CLASSE Endereço DO MODEL
         */
        $endereco = new Endereco;

        $endereco-> cep = $request->cep;
        $endereco-> logradouro = $request->logradouro;
        $endereco-> numero = $request->numero;
        $endereco-> complemento = $request->complemento;
        $endereco-> bairro = $request->bairro;
        $endereco-> cidade = $request->cidade;
        $endereco-> estado = $request->estado;

        /**
         * SALVAR OS DADOS PEGOS DA VIEW NO BANCO
         */
        $endereco->save();

        return redirect('/endereco/showall')->with('msg', 'Endereço Cadastrado com Sucesso!');
    }

    public function show($id){
        $endereco = Endereco::findOrFail($id);
        return view('endereco.show', ['endereco' => $endereco]);
    }

}
