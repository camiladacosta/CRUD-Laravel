{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div id="produtos-container" class="col-md-12">
        <h2>Lista de Produtos</h2>
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
    <a href="/produto/create" class="btn btn-primary">Novo Produto</a>
@endsection
