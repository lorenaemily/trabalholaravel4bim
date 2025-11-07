<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pet</title>
</head>
<body>
    <h1>Edição de Pet</h1>

    <form action="{{ route('pets.update', $pet->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label> 
        <input type="text" name="nome" value="{{$pet->nome}}" required><br><br>

        <label>Espécie:</label>
        <input type="text" name="especie" value="{{$pet->especie}}" required><br><br>

        <label>Raça:</label>
        <input type="text" name="raca" value="{{$pet->raca}}"><br><br>

        <label>Idade:</label>
        <input type="int" name="idade" value= "{{ $pet->idade }}"><br><br>

        <label for="cliente_id">Dono (Cliente):</label>
        <select name="cliente_id" id="cliente_id">
                <option value="">Sem dono</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $pet->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>

        <button type="submit">Atualizar</button>
        <a href="{{ route('pets.index') }}">Voltar</a>
    </form>

</body>
</html>