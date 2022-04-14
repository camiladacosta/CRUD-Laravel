{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Home</h1>
    </div>

@endsection
