<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'PetShop') }}</title>
    <script src="https://unpkg.com/imask"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Cores Personalizadas -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        azulEscuro: "#0A1A2F",
                        azulMedio: "#12385B",
                        laranja: "#FF8A00",
                        fundo: "#F4F4F7",
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-fundo">

    <!-- NAVBAR -->
    <header class="bg-azulEscuro text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Sistema PetShop</h1>

            <div>
                @auth
                    <span class="mr-4 font-semibold">{{ Auth::user()->name }}</span>
                    <form class="inline" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="bg-laranja px-4 py-2 rounded text-white font-semibold hover:bg-orange-500">
                            Sair
                        </button>
                    </form>
                @endauth
            </div>
        </div>

        <nav class="bg-azulMedio text-white">
            <ul class="flex gap-6 px-6 py-3 text-sm font-semibold">
                <li><a href="/dashboard" class="hover:text-laranja">Dashboard</a></li>
                <li><a href="/clientes" class="hover:text-laranja">Clientes</a></li>
                <li><a href="/pets" class="hover:text-laranja">Pets</a></li>
                <li><a href="/servicos" class="hover:text-laranja">Serviços</a></li>
                <li><a href="/funcionarios" class="hover:text-laranja">Funcionários</a></li>
                <li><a href="/agendamentos" class="hover:text-laranja">Agendamentos</a></li>
            </ul>
        </nav>
    </header>

<!-- CONTEÚDO -->
<main class="max-w-7xl mx-auto py-8 px-6">
    @yield('content')
</main>


    <!-- FOOTER -->
    <footer class="text-center py-6 text-gray-600 border-t mt-10">
        <p>&copy; {{ date('Y') }} PetShop • Desenvolvido por Lorena</p>
    </footer>
@yield('scripts')
</body>
</html>

