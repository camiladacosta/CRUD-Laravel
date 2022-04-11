<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Orcamento;
use App\Models\Produto;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function showall()
    {
        $orcamento = Orcamento::all();

        return view('orcamento/showall', ['orcamento' => $orcamento]);
    }

    public function create()
    {
        $cliente = Cliente::all();
        $produto = Produto::all();

        return view('orcamento.create', ['cliente' => $cliente, 'produto' => $produto]);
    }

    public function store(Request $r)
    {
        $o = new Orcamento;
        $o->situacao = $r->situacao;
        $o->cliente_id = $r->cliente_id;
        $o->data = $r->data;
        $o->valortotal = 0;

        $o->save();

        return redirect('/orcamento/showall')->with('msg', 'Orçamento Cadastrado !!!');
    }

    public function show($id)
    {
        $p = Produto::all();
        $o = Orcamento::findOrFail($id);
        return view('orcamento.show', ['orcamento' => $o, 'produto' => $p]);
    }

    public function novop($idp, $ido)
    {
        $orcamento = Orcamento::findOrFail($ido);
        $orcamento->orcamentos()->attach($idp);
        return view('orcamento.show')->with('msg', 'Item Adicionado !!!');
    }
}
