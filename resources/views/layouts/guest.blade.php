<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • PetShop</title>

    <!-- TAILWIND - Configuração de cores personalizadas -->
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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-fundo min-h-screen flex items-center justify-center">

    <!-- CONTAINER PRINCIPAL -->
    <main class="w-full max-w-md mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>
