{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','Criar Endereco')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')
    {{-- PÁGINA DE CADASTRO DE CLIENTE --}}
    <div id="criar-cliente-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar Telefone</h1>
        <form action="/telefone" method="POST">
            @csrf {{-- DIRETIVA DO BLADE PARA PERMITIR ADICIONAR DADOS NO BANCO --}}
            <div class="form-group">
                <label for="title">Código Pais:</label>
                <input type="text" class="form-control" id="codPais" name="codPais" placeholder="Código Pais">
            </div>
            <div class="form-group">
                <label for="title">DDD:</label>
                <input type="text" class="form-control" id="ddd" name="ddd" placeholder="DDD">
            </div>
            <div class="form-group">
                <label for="title">Radical Número:</label>
                <input type="text" class="form-control" id="radical" name="radical" placeholder="Radical Número">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
