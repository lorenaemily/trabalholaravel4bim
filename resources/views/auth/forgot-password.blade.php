@extends('layouts.guest')

@section('content')

<div class="bg-white shadow-lg rounded-xl p-8 border-t-4 border-laranja">

    <h1 class="text-xl font-bold text-azulEscuro text-center mb-4">
        Recuperar senha
    </h1>

    <p class="text-gray-600 mb-4">
        Informe seu email e enviaremos um link para redefinir sua senha.
    </p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div>
            <label class="block font-semibold text-azulEscuro mb-1">Email</label>
            <input type="email" name="email" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Botão -->
        <button
            class="w-full mt-6 bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 rounded-lg transition">
            Enviar link
        </button>

        <p class="mt-4 text-center text-sm">
            <a href="{{ route('login') }}" class="text-azulMedio hover:underline">Voltar ao login</a>
        </p>

    </form>

</div>

@endsection

