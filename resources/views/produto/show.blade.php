{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Produto ' . $produto->descricao)

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
        <a href="/produto/edit/{{ $produto->id }}" class="btn btn-info edit-btn">Update</a>
        <form action="/produto/{{ $produto->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
        </form>
    </div>
@endsection
