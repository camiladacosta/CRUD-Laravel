<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Orcamento;

class OrcamentoController extends Controller
{
    public function showall()
    {
        $cliente = Cliente::all()->toArray();
        $search = request('search');
        if ($search) {
            $orcamento = Orcamento::where('data', 'like', '%' . $search . '%') //BUSCA PELA DATA
            ->orWhere('situacao', 'like', '%' . $search . '%')//BUSCA PELA SITUAÇÃO *PROBLEMA: Ativo volta todos*
            ->orWhere('valorTotal', 'like', '%' . $search . '%')//BUSCA PELO VALOR TOTAL

            /**
             * RETORNA ARRAY COM TODOS OS NOMES DOS CLIENTES - ERRO DE SINTAXE -
             */
            //->orWhere( $cliente, 'nome', 'like', '%' . $search . '%') //BUSCA PELO NOME


            ->get(); //GET PARA RESGATAR DE FATO O CAMPO NO BD
        } else {
            $orcamento = Orcamento::all();
        }

        return view('orcamento/showall', ['orcamento' => $orcamento, 'search' => $search]);
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

        return redirect('/orcamento/showall')->with('msg', 'Orçamento Cadastrado!');
    }

    public function edit($id)
    {
        $p = Produto::all();
        $o = Orcamento::findOrFail($id);
        $pdo = $o->produtosDoOrcamento;
        return view('orcamento.add', ['orcamento' => $o, 'produto' => $p, 'pdo' => $pdo]);
    }

    public function show($id)
    {
        $p = Produto::all();
        $o = Orcamento::findOrFail($id);
        $pdo = $o->produtosDoOrcamento;
        return view('orcamento.show', ['orcamento' => $o, 'produto' => $p, 'pdo' => $pdo]);
    }

    public function addp(Request $r)
    {
        $o = Orcamento::findOrFail($r->orcamento_id);
        $o->produtosDoOrcamento()->attach($r->produto_id);
        return redirect('orcamento/add/' . $r->orcamento_id)->with('msg', 'Produto adicionado !!!');
    }

    public function removep(Request $r)
    {
        $o = Orcamento::findOrFail($r->orcamento_id);
        $o->produtosDoOrcamento()->datach($r->produto_id);
        return redirect('orcamento/add/' . $r->orcamento_id)->with('msg', 'Produto removido !!!');
    }

    public function destroy($id)
    {
        Orcamento::findOrFail($id)->delete();
        return redirect('/orcamento/showall')->with('msg', 'Produto excluido !!!');
    }
}
