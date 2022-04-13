{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Produtos')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="search-container" class="col-md-12">
        <div class="campo">
            <form action="/produto/showall" method="GET">
                <label for="text">Busque Produtos</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Busque um Produto">
                <input type="submit" id="botao-pesquisar" class="btn btn-primary" value="Buscar">
            </form>
        </div>
    </div>
    <div id="produtos-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Lista de Produtos</h2>
        @endif
        <a href="/produto/create" class="btn btn-primary">Novo Produto</a>
        <div id="cards-container" class="row">
            <div id="cards-container" class="row">
                @foreach ($produto as $produto)
                    <div class="card-body">
                        <p>Produto: {{ $produto->descricao }}</p>
                        <p>Preço: {{ $produto->valor }}</p>
                        <a href="/produto/{{ $produto->id }}" class="btn btn-primary">Ver Mais</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
