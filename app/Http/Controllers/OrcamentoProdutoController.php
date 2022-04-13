<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrcamentoProduto;

class OrcamentoProdutoController extends Controller
{
    public function addproduto(Request $r)
    {

        $op = new OrcamentoProduto;
        $op->produto_id = $r->produto_id;
        $op->orcamento_id = $r->orcamento_id;
        $op->quantidade = $r->quantidade;
        $op->save();
        return redirect('orcamento/' . $r->orcamento_id)->with('msg', 'Produto adicionado !!!');
    }
}
