<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'PetShop') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        @include('layouts.navigation')

        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <header class="bg-white shadow mt-4">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">

                <h1 class="text-2xl font-bold mb-2">🐾 Sistema PetShop</h1>

                <nav class="space-x-4 text-blue-600 font-semibold">
                    <a href="{{ route('clientes.index') }}">Clientes</a>
                    <a href="{{ route('pets.index') }}">Pets</a>
                    <a href="{{ route('servicos.index') }}">Serviços</a>
                    <a href="{{ route('funcionarios.index') }}">Funcionários</a>
                    <a href="{{ route('agendamentos.index') }}">Agendamentos</a>
                </nav>
            </div>
        </header>

        <main class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <footer class="text-center py-4 text-gray-500">
            &copy; {{ date('Y') }} PetShop - Todos os direitos reservados.
        </footer>

    </div>

</body>
</html>
