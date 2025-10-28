@extends('layout.app')

@section('content')
    <h1>Editar Cliente</h1>

    {{-- Mensagem de sucesso --}}
    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif

    {{-- Exibição de erros --}}
    @if ($errors->any())
        <div>
            <strong>Erros:</strong>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $cliente->nome) }}" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" value="{{ old('email', $cliente->email) }}" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $cliente->telefone) }}"><br><br>

        <button type="submit">Salvar Alterações</button>
        <a href="{{ route('clientes.index') }}">Voltar</a>
    </form>
@endsection
