{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="info-container" class="col-md-4">
                <h2>{{ $produto->descricao }}</h2>
                <p>Material: {{ $produto->material }}</p>
                <p>Unidade: {{ $produto->unidade }}</p>
                <p>Espessura: {{ $produto->espessura }}</p>
                <p>Valor: {{ $produto->valor }}</p>
            </div>
        </div>
    </div>
@endsection
