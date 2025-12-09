@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-azulEscuro mb-6 text-center">Criar Conta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Nome --}}
        <label class="block mb-2 font-semibold text-gray-700">Nome</label>
        <input type="text" name="name" value="{{ old('name') }}"
            class="w-full p-3 border rounded-lg mb-4 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Email --}}
        <label class="block mb-2 font-semibold text-gray-700">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
            class="w-full p-3 border rounded-lg mb-4 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Senha --}}
        <label class="block mb-2 font-semibold text-gray-700">Senha</label>
        <input type="password" name="password"
            class="w-full p-3 border rounded-lg mb-4 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Confirmar senha --}}
        <label class="block mb-2 font-semibold text-gray-700">Confirmar Senha</label>
        <input type="password" name="password_confirmation"
            class="w-full p-3 border rounded-lg mb-6 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Botão --}}
        <button class="w-full bg-laranja hover:bg-orange-500 text-white p-3 rounded-lg font-semibold transition">
            Criar Conta
        </button>

        <div class="text-center mt-4 text-sm">
            Já tem conta?
            <a href="{{ route('login') }}" class="text-azulMedio hover:text-laranja">
                Entrar
            </a>
        </div>
    </form>
</div>

@endsection
