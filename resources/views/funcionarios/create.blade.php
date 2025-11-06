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

        <label>Cargo:</label>
        <input type="text" name="cargo" required><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"><br><br>

        <label>Salário:</label>
        <input type="int" name="salario"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>