{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Home</h1>
        <form action="">
            <input type="text" name="" id="search" class="form-control" placeholder="Busque um Cliente">
        </form>
    </div>
    <div id="clientes-container" class="col-md-12">
        <h2>Lista</h2>
        <div id="cards-container" class="row">
            @foreach ($cliente as $cliente)
                <div class="card col-md-2">
                    <div class="card-body">
                        <p>Nome: {{ $cliente-> nome }}</p>
                        <p>CPF: {{ $cliente-> cpf }}</p>
                        <p>Email: {{ $cliente-> email }}</p>
                        <p>Nacionalidade: {{ $cliente-> nacionalidade }}</p>
                        <p>Endereço: {{ $cliente-> endereco }}</p>
                        <p>Profissão: {{ $cliente-> profissao }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
