<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefone;

class TelefoneController extends Controller
{
    public function index(){
        $telefone = Telefone::all();

        /**
         * ENVIANDO PARA A VIEW / = 'listar' TODOS OS ENDEREÇOS DO BANCO
         */
        return view('listar',['telefone' => $telefone]);
    }

    /**
     * create-> MÉTODO/ACTION PADRÃO PARA CRIAR NOVO CAMPO (telefone)
     */
    public function create(){
        return view('telefone.create');
    }

    public function store(Request $request){
        /**
         * INSTANCIANDO A CLASSE Endereço DO MODEL
         */
        $telefone = new Telefone;

        $telefone-> codPais = $request->codPais;
        $telefone-> ddd = $request->ddd;
        $telefone-> radical = $request->radical;

        /**
         * SALVAR OS DADOS PEGOS DA VIEW NO BANCO
         */
        $telefone->save();

        return redirect('/')->with('msg', 'Telefone Cadastrado com Sucesso!');
    }
}
