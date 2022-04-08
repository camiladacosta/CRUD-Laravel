{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title',$endereco->title)

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

    <h1>Endereços</h1>
    <p>{{ $endereco -> bairro }}</p>
    <p>{{ $endereco -> cidade }}</p>
    <p>{{ $endereco -> estado }}</p>

@endsection
