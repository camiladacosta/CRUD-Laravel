{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Criar Produto')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="criar-produto-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar Produtos</h1>
        <form action="/produto" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Descrição:
                </label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do Produto">
            </div>
            <div class="form-group">

                <label for="title">Material:</label>
                <input type="text" class="form-control" id="material" name="material" placeholder="Material do Produto">
            </div>
            <div class="form-group">
                <label for="title">Unidade:</label>
                <input type="text" class="form-control" id="unidade" name="unidade" placeholder="Unidade do Produto">
            </div>
            <div class="form-group">
                <label for="title">Espessura</label>
                <input type="text" class="form-control" id="espessura" name="espessura" placeholder="Espessura do Produto">
            </div>
            <div class="form-group">
                <label for="title">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor do Produto">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
