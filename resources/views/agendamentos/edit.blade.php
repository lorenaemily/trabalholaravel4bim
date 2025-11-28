<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Agendamento</title>
</head>
<body>
    <h1>Edição de agendamento</h1>

    <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Data:</label> 
        <input type="date" name="date" value="{{$agendamento->data}}" required><br><br>

        <label>Hora:</label>
        <input type="time" name="time" value="{{$agendamento->hora}}" required><br><br>

        <label for="servico_id">Serviço:</label>
        <select name="servico_id" id="servico_id">
                @foreach ($clientes as $cliente)
                    <option value="{{ $servico->id }}" {{ $agendamento->servico_id == $servico->id ? 'selected' : '' }}>
                        {{ $servico->nome }}
                    </option>
                @endforeach
        </select><br><br>

        <label for="servico_id">Funcionário:</label>
        <select name="funcionario_id" id="funcionario_id">
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" {{ $agendamento->funcionario_id == $funcionario->id ? 'selected' : '' }}>
                        {{ $funcionario->nome }}
                    </option>
                @endforeach
        </select><br><br>

        <label for="servico_id">Pet:</label>
        <select name="pet_id" id="pet_id">
                @foreach ($pets as $pet)
                    <option value="{{ $pet->id }}" {{ $agendamento->pet_id == $pet->id ? 'selected' : '' }}>
                        {{ $pet->raca }}
                    </option>
                @endforeach
        </select><br><br>

        <label for="cliente_id">Dono (Cliente):</label>
        <select name="cliente_id" id="cliente_id">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $agendamento->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
        </select><br><br>
        
        <button type="submit">Atualizar</button>
        <a href="{{ route('agendamentos.index') }}">Voltar</a>
    </form>

</body>
</html>