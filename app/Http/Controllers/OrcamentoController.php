<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
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
        return view('orcamento.create');
    }
}
