{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Home</h1>
        <div class="campo">
            <form action="/" method="GET">
                <input type="text" name="search" id="search" class="form-control" placeholder="Busque um Cliente">
                <input type="submit" id="botao-pesquisar" class="btn btn-primary" value="Buscar">
            </form>
        </div>
    </div>

    <div id="clientes-container" class="col-md-12">
        <h2>Lista Clientes</h2>
        <div id="cards-container" class="row">
            @foreach ($cliente as $cliente)
                <div class="card col-md-2">
                    <div class="card-body">
                        <p>Cliente: {{ $cliente->nome }}</p>
                        <p>CPF: {{ $cliente->cpf }}</p>
                        <!--<p>Email: {{-- $cliente-> email }}</p>
                        <p>Nacionalidade: {{ $cliente-> nacionalidade }}</p>
                        <p>Endereço: {{ $cliente-> endereco_id }}</p>
                        <p>Telefone: {{ $cliente-> telefone }}</p>
                        <p>Profissão: {{ $cliente-> profissao --}}</p>-->
                        <a href="/cliente/{{ $cliente->id }}" class="btn btn-primary">Ver Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--
                <div id="produtos-container" class="col-md-12">
                    <h2>Lista de Produtos</h2>
                    <div id="cards-container" class="row">
                        <div id="cards-container" class="row">

                        </div>
                    </div>
                </div>
            -->
@endsection
