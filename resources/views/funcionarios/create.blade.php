<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Funcionário</title>
</head>
<body>
    <h1>Cadastro de Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>CPF:</label>
        <input type="text" name="cpf" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"><br><br>

        <label>Salário:</label>
        <input type="number" step="0.01" name="salario" required><br><br>

        <label>Serviço:</label>
        <select name="servico_id" required>
            <option value="">Selecione um serviço</option>
            @foreach($servicos as $servico)
                <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
