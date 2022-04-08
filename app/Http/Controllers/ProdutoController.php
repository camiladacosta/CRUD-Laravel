<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function showall()
    {
        /**
         * Pesquisar por id
         */
        $search = request('search');
        if ($search) {
            $produto = Produto::where('descricao', 'like', '%' . $search . '%')->get(); //get para pegar o registo
        } else {
            $produto = Produto::all();
        }
        $produto = Produto::all();

        return view('produto/showall', ['produto' => $produto]);
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $produto = new Produto;

        $produto->descricao = $request->descricao;
        $produto->material = $request->material;
        $produto->unidade = $request->unidade;
        $produto->espessura = $request->espessura;
        $produto->valor = $request->valor;

        $produto->save();
        return redirect('/produto/showall')->with('msg', 'Cliente Cadastrado com Sucesso!');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', ['produto' => $produto]);
    }

    /*Método delete*/
    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect('/produto/showall')->with('msg', 'Evento excluido');
    }
}
