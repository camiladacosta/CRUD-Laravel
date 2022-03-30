{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','Criar Cliente')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

<h1>Cadastrar Novo Cliente</h1>
<p>Nome: <input type="text"></p>
@endsection