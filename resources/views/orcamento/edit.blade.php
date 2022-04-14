{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
    <div id="criar-produto-container" class="col-md-6 offset-md-3 mt-3">

        <h1>Editar Orçamento de {{ $orcamento->cliente->nome }}</h1>

        <form action=" /orcamento" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cliente_id">Selecione o cliente deste Orçamento</label>
                <select name="cliente_id" id="cliente_id" class="form-control">
                    @foreach ($clientes as $c)
                        @if ($c->id == $orcamento->cliente_id)
                            <option value="{{ $c->id }}" selected>{{ $c->nome }}</option>
                        @else
                            <option value="{{ $c->id }}">{{ $c->nome }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Data do Orçamento:
                </label>
                <input type="date" class="form-control" id="data" name="data"
                    value="{{ date('d/m/Y', strtotime($orcamento->data)) }}">
            </div>

            <div class="form-group">
                <label for="text">Situação do Orçamento:</label>
                <select name="situacao" id="situacao" class="form-control">
                    @if ($orcamento->situacao == 'Ativo')
                        <option value="Ativo" selected>Ativo</option>
                    @else
                        <option value="Demonstrativo">Demonstrativo</option>
                        <option value="Inativo">Inativo</option>
                    @endif
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Atualizar">

        </form>

    </div>

@endsection
