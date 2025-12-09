@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h2 class="text-2xl font-bold text-azulEscuro mb-6 text-center">Nova Senha</h2>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <label class="block mb-2 font-semibold text-gray-700">Email</label>
        <input type="email" name="email" value="{{ old('email', $request->email) }}"
               class="w-full p-3 border rounded-lg mb-4">

        <label class="block mb-2 font-semibold text-gray-700">Nova Senha</label>
        <input type="password" name="password"
               class="w-full p-3 border rounded-lg mb-4">

        <label class="block mb-2 font-semibold text-gray-700">Confirmar Senha</label>
        <input type="password" name="password_confirmation"
               class="w-full p-3 border rounded-lg mb-6">

        <button class="w-full bg-laranja text-white p-3 rounded-lg font-semibold hover:bg-orange-500">
            Redefinir Senha
        </button>
    </form>

</div>

@endsection
