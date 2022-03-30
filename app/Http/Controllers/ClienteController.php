<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $nome = "Camila da Costa";
        $array = [1,2,3,4,5];

        //nome da pagina blade.php e passando um array com as chaves
        return view('welcome',['nome' => $nome,'array' => $array]);
    }
    //action para criar novo cliente
    public function criar(){
        return view('cliente.criar');
    }
}
