<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Serviço</title>
</head>
<body>
    <h1>Cadastro de Serviço</h1>

    <form action="{{ route('servicos.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" required><br><br>

        <label>Descrição:</label>
        <input type="text" name="descricao"><br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('servicos.index') }}">Voltar</a>
</body>
</html>