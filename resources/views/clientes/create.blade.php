<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"><br><br>

        <label>Endereço:</label>
        <input type="text" name="endereco"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('clientes.index') }}">Voltar</a>
</body>
</html>