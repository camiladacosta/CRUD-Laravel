{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div class="col-md-12">
        <div id="cards-container" class="row">
            <div id="card-container" class="col-md-4">
                <h2>Orçamento de {{ $orcamento->cliente->nome }}</h2>
                <p>Situacao: {{ $orcamento->situacao }}</p>
                <p class="card-date">Data: {{ date('d/m/Y', strtotime($orcamento->data)) }}</p>
            </div>
        </div>

    </div>

    <div class="col-md-10">
        <h4>Todos os Produtos</h4>
        <label for="cards-container">Selecione o Produto</label>
        <ul class="list-group">
            @foreach ($produto as $produto)
                <form action="/orcamento/novop/{{ $orcamento->id, $produto->id }}" method="POST">
                    <a href="/orcamento/novop/{{ $orcamento->id, $produto->id }}"
                        class="list-group-item list-group-item-action" id="orcamento-submit" onclick="event.preventDefault();
                                this.closest('form').submit();">
                        Produto: {{ $produto->descricao }} Valor: {{ $produto->valor }}</a>
                </form>
            @endforeach
        </ul>
    </div>
@endsection
