{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title',$cliente->title)

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="info-container" class="col-md-4">
                <h2>{{ $cliente -> nome }}</h2>
                <p>CPF: {{ $cliente-> cpf }}</p>
                <p>Email: {{ $cliente-> email }}</p>
                <p>Nacionalidade: {{ $cliente-> nacionalidade }}</p>
                <p>Telefone: {{ $cliente-> telefone }}</p>
                <p>Profissão: {{ $cliente-> profissao }}</p>
            </div>
            <div id="info-container" class="col-md-4">
                <h2>Endereço</h2>
                <p>CEP: {{ $endereco-> cep }}</p>
                <p>Logradouro: {{ $endereco-> logradouro }}</p>
                <p>Nº: {{ $endereco-> numero }}</p>
                <p>Complemento: {{ $endereco-> complemento }}</p>
                <p>Bairro: {{ $endereco-> bairro }}</p>
                <p>Cidade: {{ $endereco-> cidade }}</p>
                <p>Estado: {{ $endereco-> estado }}</p>
            </div>
            <div id="info-container" class="col-md-4">
                <h2>Orçamento</h2>
            </div>
        </div>
    </div>

@endsection
