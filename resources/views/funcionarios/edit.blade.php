@extends('layout.app')

@section('content')
    <h1>Editar Funcionário</h1>

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

        <label>Nome:</label>
        <input type="text"
               name="nome"
               value="{{ old('nome', $funcionario->nome) }}"
               required>
        <br><br>

        <label>CPF:</label>
        <input type="text"
               name="cpf"
               value="{{ old('cpf', $funcionario->cpf) }}"
               required>
        <br><br>

        <label>Email:</label>
        <input type="email"
               name="email"
               value="{{ old('email', $funcionario->email) }}"
               required>
        <br><br>

        <label>Telefone:</label>
        <input type="text"
               name="telefone"
               value="{{ old('telefone', $funcionario->telefone) }}">
        <br><br>

        <label>Salário:</label>
        <input type="number"
               step="0.01"
               name="salario"
               value="{{ old('salario', $funcionario->salario) }}"
               required>
        <br><br>

        <label>Serviço:</label>
        <select name="servico_id" required>
            <option value="">Selecione um serviço</option>

            @foreach($servicos as $servico)
                <option value="{{ $servico->id }}"
                    {{ old('servico_id', $funcionario->servico_id) == $servico->id ? 'selected' : '' }}>
                    {{ $servico->nome }}
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Salvar alterações</button>
    </form>

    <br>
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
@endsection
