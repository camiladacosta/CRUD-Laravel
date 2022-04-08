<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function showall()
    {
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
}
