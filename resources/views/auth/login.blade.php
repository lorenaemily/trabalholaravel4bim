@extends('layouts.guest')

@section('content')

<div class="bg-white shadow-lg rounded-xl p-8 border-t-4 border-laranja">

    <h1 class="text-2xl font-bold text-azulEscuro text-center mb-6">
        Bem-vindo ao PetShop 
    </h1>

    <!-- Sessão de Erros -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
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

        <!-- Lembrar -->
        <div class="flex items-center mt-4">
            <input type="checkbox" name="remember"
                class="rounded border-gray-300 text-laranja focus:ring-laranja">
            <span class="ml-2 text-gray-700">Lembrar de mim</span>
        </div>

        <!-- Botão -->
    <button
        class="w-full mt-6 bg-orange-600 text-white font-bold py-2 rounded-lg transition border border-laranja hover:bg-orange-500 active:bg-orange-600 focus:ring-2 focus:ring-orange-300">
        Entrar
    </button>


        <!-- Links -->
        <div class="mt-4 flex justify-between text-sm text-azulMedio">
            <a href="{{ route('password.request') }}" class="hover:underline">Esqueceu a senha?</a>
            <a href="{{ route('register') }}" class="hover:underline">Criar conta</a>
        </div>

    </form>

</div>

@endsection
