<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Sistema</title>

    {{-- Link para o CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>🐾 Sistema PetShop</h1>
        <nav>
            <a href="{{ route('clientes.index') }}">Clientes</a> |
            <a href="{{ route('pets.index') }}">Pets</a> |
            <a href="{{ route('servicos.index') }}">Serviços</a> |
            <a href="{{ route('agendamentos.index') }}">Agendamentos</a>
        </nav>
        <hr>
    </header>

    <main>
        {{-- Aqui o Laravel insere o conteúdo das views --}}
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} PetShop - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
