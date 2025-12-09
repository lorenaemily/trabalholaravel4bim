@extends('layouts.guest')

@section('content')

<div class="bg-white shadow-lg rounded-xl p-8 border-t-4 border-laranja">

    <h1 class="text-xl font-bold text-azulEscuro text-center mb-4">
        Redefinir Senha
    </h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email -->
        <div>
            <label class="block font-semibold text-azulEscuro mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $request->email) }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Nova senha -->
        <div class="mt-4">
            <label class="block font-semibold text-azulEscuro mb-1">Nova Senha</label>
            <input type="password" name="password" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Confirmar -->
        <div class="mt-4">
            <label class="block font-semibold text-azulEscuro mb-1">Confirmar Senha</label>
            <input type="password" name="password_confirmation" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-laranja focus:ring-laranja">
        </div>

        <!-- Botão -->
        <button
            class="w-full mt-6 bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 rounded-lg transition">
            Redefinir Senha
        </button>

    </form>

</div>

@endsection
