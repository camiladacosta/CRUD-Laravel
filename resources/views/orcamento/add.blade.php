{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div class="col-md-6 offset-md-3 mt-3">
        <form action="/orcamento/add" method="POST">
            @csrf
            <div class="form-group">
                <h1>Orçamento de {{ $orcamento->cliente->nome }}</h1>
                <p>Situação do orçamento: {{ $orcamento->situacao }}</p>
                <p class="card-date">Data do orçamento: {{ date('d/m/Y', strtotime($orcamento->data)) }}</p>
                <select name="orcamento_id" id="orcamento_id">
                    <option value={{ $orcamento->id }}></option>
                </select>
                <label for="list">Produtos do Orçamento:</label>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pdo as $op)
                            <tr>
                                <td>{{ $op->descricao }}</td>
                                <td>{{ $op->valor }}</td>
                                <td>{{ $op->unidade }}</td>
                                <td>
                                    <input type="submit" class="btn btn-danger delete-btn float-right" value="Delete">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="form-group">
                <h3>Todos os Produtos</h3>
                <label for="select">Selecione o Produto para adicionar ao orçamento:</label>
                <select id="produto_id" name="produto_id" class="form-control">
                    @foreach ($produto as $produto)
                        <option value={{ $produto->id }}>
                            Produto: {{ $produto->descricao }} Valor: {{ $produto->valor }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="text">Quantidade de Produtos: </label>
                <input type="text" class="form-control" id="quantidade" name="quantidade"
                    placeholder="Quantidade de Produtos">
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar Produto">
        </form>
    </div>
@endsection
