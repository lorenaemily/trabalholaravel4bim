<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Pet</title>
</head>
<body>
    <h1>Cadastro de Pet</h1>

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Espécie:</label>
        <input type="text" name="especie" required><br><br>

        <label>Raça:</label>
        <input type="text" name="raca"><br><br>

        <label>Idade:</label>
        <input type="int" name="idade"><br><br>

        <label for="cliente_id">Dono (Cliente):</label>
        <select name="cliente_id" id="cliente_id">
                <option value="">Selecione o dono (opcional)</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('pets.index') }}">Voltar</a>
</body>
</html>