@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

<<<<<<< HEAD
    <div id="produtos-container" class="col-md-12 mt-3">
        <h2>Lista de Orçamentos</h2>
        <a href="/orcamento/create" class="btn btn-primary">Novo Orçamento</a>
=======
    <div id="search-container" class="col-md-12">
        <div class="campo">
            <form action="/orcamento/showall" method="GET">
                <label for="text">Busque Por Orçamentos</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Busque um Orçamento">
                <input type="submit" id="botao-pesquisar" class="btn btn-primary" value="Buscar">
            </form>
        </div>
    </div>
    <div id="lista-container" class="col-md-12">
        <h2>Lista de Orçamentos | <a href="/orcamento/create" class="btn btn-dark">Cadastrar Novo</a></h2>
>>>>>>> main
        <div id="cards-container" class="row">
            <div id="card-container" class="row">
                @foreach ($orcamento as $orcamento)
                    <div class="card-body">
                        <p>Cliente: {{ $orcamento->cliente->nome }}</p>
                        <p>Situacao: {{ $orcamento->situacao }}</p>
                        <p class="card-date">Data: {{ date('d/m/Y', strtotime($orcamento->data)) }}</p>
<<<<<<< HEAD
                        <a href="/orcamento/add/{{ $orcamento->id }}" class="btn btn-primary">Adicionar Produtos</a>
                        <a href="/orcamento/{{ $orcamento->id }}" class="btn btn-primary">Ver Mais</a>
=======
                        <a href="/orcamento/add/{{ $orcamento->id }}" class="btn btn-success">Adicionar Produtos</a>
                        <a href="/orcamento/{{ $orcamento->id }}" class="btn btn-info">Ver Mais</a>
>>>>>>> main
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
