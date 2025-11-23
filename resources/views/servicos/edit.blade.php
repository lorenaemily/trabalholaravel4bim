@extends('layout.app')

@section('content')
<h1>Editar Serviço</h1>

@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<form action="{{ route('servicos.update', $servico->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ old('nome', $servico->nome) }}" required><br><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" value="{{ old('preco', $servico->preco) }}" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao">{{ old('descricao', $servico->descricao) }}</textarea><br><br>

    <button type="submit">Salvar Alterações</button>
</form>

<a href="{{ route('servicos.index') }}">Voltar</a>
@endsection
