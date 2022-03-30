<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();

        /**
         * ENVIANDO PARA A VIEW / = 'welcome' TODOS OS CLIENTES DO BANCO
         */
        return view('welcome',['cliente' => $cliente]);
    }

    //action para criar novo cliente
    public function criar(){
        return view('cliente.criar');
    }
}
