<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Agendamento</title>
</head>
<body>
    <h1>Cadastro de Agendamento</h1>

    <form action="{{ route('agendamentos.store') }}" method="POST">
        @csrf

        <label>Data:</label>
        <input type="date" name="data" required><br><br>

        <label>Hora:</label>
        <input type="time" name="hora" required><br><br>

        <label for="servico_id">Serviço:</label>
        <select name="servico_id" id="servico_id" required>
                <option value="">Selecione o Serviço</option>
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}" >{{ $servico->nome }}</option>
                @endforeach
        </select><br><br>

        <label for="funcionario_id">Funcionario:</label>
        <select name="funcionario_id" id="funcionario_id" required>
                <option value="">Selecione o Funcionário</option>
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" >{{ $funcionario->nome }}</option>
                @endforeach
        </select><br><br>

        <label for="pet_id">Pet:</label>
        <select name="pet_id" id="pet_id" required>
                <option value="">Selecione o Animal</option>
                @foreach ($pets as $pet)
                    <option value="{{ $pet->id }}" >{{ $pet->raca }}</option>
                @endforeach
        </select><br><br>

        <label for="cliente_id">Dono (Cliente):</label>
        <select name="cliente_id" id="cliente_id" required>
                <option value="">Selecione o dono</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" >{{ $cliente->nome }}</option>
                @endforeach
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>