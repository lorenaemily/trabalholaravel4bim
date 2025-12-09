@extends('layouts.guest')

@section('content')

<div class="bg-white shadow-lg rounded-xl p-8 border-t-4 border-laranja">

    <h1 class="text-xl font-bold text-azulEscuro text-center mb-4">
        Confirmar Senha
    </h1>

    <p class="text-gray-600 mb-4">
        Antes de continuar, confirme sua senha.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Senha -->
        <div>
            <label class="block font-semibold text-azulEscuro mb-1">Senha</label>
            <input type="password" name="password" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Botão -->
        <button
            class="w-full mt-6 bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 rounded-lg transition">
            Confirmar
        </button>

    </form>

</div>

@endsection

