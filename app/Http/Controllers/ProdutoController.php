<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        $produto = Produto::all();

        return view('welcome', ['produto' => $produto]);
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
        return redirect('/')->with('msg', 'Produto Cadastrado');
    }
}
