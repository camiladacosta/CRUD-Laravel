{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Clientes')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="search-container" class="col-md-12">
        <div class="campo">
            <form action="/cliente/showall" method="GET">
                <label for="text">Busque Por Clientes</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Busque um Cliente">
                <input type="submit" id="botao-pesquisar" class="btn btn-primary" value="Buscar">
            </form>
        </div>
    </div>
    <div id="lista-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Lista de Clientes | <a href="/cliente/create" class="btn btn-dark">Cadastrar Novo</a></h2>
        @endif
        <div id="cards-container" class="row">
            <div id="cards-container" class="row">
                @foreach ($cliente as $cliente)
                    <div class="card-body">
                        <p>Cliente: {{ $cliente->nome }}</p>
                        <p>CPF: {{ $cliente->cpf }}</p>
                        <a href="/cliente/{{ $cliente->id }}" class="btn btn-info">Ver Mais</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
