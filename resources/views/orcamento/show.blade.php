{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'CRUD')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')

    <div class="col-md-6 offset-md-3 mt-3">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pdo as $op)
                        <tr>
                            <td>{{ $op->descricao }}</td>
                            <td>{{ $op->valor }}</td>
                            <td>{{ $op->unidade }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
<<<<<<< HEAD
        <a href="/orcamento/edit/{{ $orcamento->id }}" class="btn btn-primary edit-btn">Update</a>
=======
        <input type="submit" class="btn btn-primary" value="Update">
>>>>>>> main
        <form action="/orcamento/{{ $orcamento->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger delete-btn" value="Delete">
        </form>
    </div>
@endsection
