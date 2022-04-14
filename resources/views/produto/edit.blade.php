{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Editando Produto ' . $produto->descricao)

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="criar-produto-container" class="col-md-6 offset-md-3">
        <h1>Editando Produto: {{ $produto->descricao }}</h1>
        <form action="/produto/update/{{ $produto->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Descrição:
                </label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do Produto"
                    value="{{ $produto->descricao }}">
            </div>
            <div class="form-group">

                <label for="title">Material:</label>
                <input type="text" class="form-control" id="material" name="material" placeholder="Material do Produto"
                    value="{{ $produto->material }}">
            </div>
            <div class="form-group">
                <label for="title">Unidade:</label>
                <input type="text" class="form-control" id="unidade" name="unidade" placeholder="Unidade do Produto"
                    value="{{ $produto->unidade }}">
            </div>
            <div class="form-group">
                <label for="title">Espessura</label>
                <input type="text" class="form-control" id="espessura" name="espessura" placeholder="Espessura do Produto"
                    value="{{ $produto->espessura }}">
            </div>
            <div class="form-group">
                <label for="title">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor do Produto"
                    value="{{ $produto->valor }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </form>
    </div>

@endsection
