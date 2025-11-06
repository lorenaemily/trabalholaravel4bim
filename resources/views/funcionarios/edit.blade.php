@extends('layout.app')

@section('content')
    <h1>Editar Dados do Funcionário</h1>

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

    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $funcionario->nome) }}" required><br><br>

        <label for="cargo">cargo:</label><br>
        <input type="text" name="cargo" id="cargo" value="{{ old('cargo', $funcionario->cargo) }}" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $funcionario->telefone) }}"><br><br>

        <label for="salario">Salário:</label><br>
        <input type="int" name="salario" id="salario" value="{{ old('salario', $funcionario->salario) }}"><br><br>

        <button type="submit">Salvar Alterações</button>
        <a href="{{ route('funcionarios.index') }}">Voltar</a>
    </form>
@endsection
