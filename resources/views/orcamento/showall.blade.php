@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div id="lista-container" class="col-md-12 mt-3">
        <h2>Lista de Orçamentos | <a href="/orcamento/create" class="btn btn-dark">Cadastrar Novo</a></h2>
        <div id="cards-container" class="row">
            <div id="card-container" class="row">
                @foreach ($orcamento as $orcamento)
                    <div class="card-body">
                        <p>Cliente: {{ $orcamento->cliente->nome }}</p>
                        <p>Situacao: {{ $orcamento->situacao }}</p>
                        <p class="card-date">Data: {{ date('d/m/Y', strtotime($orcamento->data)) }}</p>
                        <a href="/orcamento/add/{{ $orcamento->id }}" class="btn btn-success">Adicionar Produtos</a>
                        <a href="/orcamento/{{ $orcamento->id }}" class="btn btn-info">Ver Mais</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
