{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','Criar Endereco')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')
    {{-- PÁGINA DE CADASTRO DE CLIENTE --}}
    <div id="criar-endereco-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar Endereço</h1>
        <form action="/endereco" method="POST">
            @csrf {{-- DIRETIVA DO BLADE PARA PERMITIR ADICIONAR DADOS NO BANCO --}}
            <div class="form-group">
                <label for="title">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
            </div>
            <div class="form-group">
                <label for="title">Logradouro:</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
            </div>
            <div class="form-group">
                <label for="title">Numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
            </div>
            <div class="form-group">
                <label for="title">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="form-group">
                <label for="title">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="title">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
