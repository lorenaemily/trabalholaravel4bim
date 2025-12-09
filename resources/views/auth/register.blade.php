@extends('layouts.guest')

@section('content')

<div class="bg-white shadow-lg rounded-xl p-8 border-t-4 border-laranja">

    <h1 class="text-2xl font-bold text-azulEscuro text-center mb-6">
        Criar conta
    </h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <label class="block text-azulEscuro font-semibold mb-1">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Email -->
        <div class="mt-4">
            <label class="block text-azulEscuro font-semibold mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <label class="block text-azulEscuro font-semibold mb-1">Senha</label>
            <input type="password" name="password" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Confirmar Senha -->
        <div class="mt-4">
            <label class="block text-azulEscuro font-semibold mb-1">Confirmar Senha</label>
            <input type="password" name="password_confirmation" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Botão -->
        <button
            class="w-full mt-6 bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 rounded-lg transition">
            Registrar
        </button>

        <p class="mt-4 text-center text-azulMedio text-sm">
            Já possui conta?
            <a class="text-laranja hover:underline" href="{{ route('login') }}">Entrar</a>
        </p>

    </form>

</div>

@endsection
