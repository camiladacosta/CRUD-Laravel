{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Criar Produto')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="criar-produto-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar Orçamento</h1>
        <form action="/orcamento" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Data do Orçamento:
                </label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
