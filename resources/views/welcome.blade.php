{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

    <h1>CRUD</h1>
    <p>{{$nome}}</p>
    @for($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }}</p>
    @endfor

@endsection