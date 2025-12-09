@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-azulEscuro mb-6 text-center">Entrar</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="text-sm">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        {{-- Email --}}
        <label class="block mb-2 font-semibold text-gray-700">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
            class="w-full p-3 border rounded-lg mb-4 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Senha --}}
        <label class="block mb-2 font-semibold text-gray-700">Senha</label>
        <input type="password" name="password"
            class="w-full p-3 border rounded-lg mb-4 focus:ring-2 focus:ring-azulMedio focus:outline-none">

        {{-- Lembrar --}}
        <label class="flex items-center gap-2 mb-4 text-gray-600">
            <input type="checkbox" name="remember">
            Lembrar de mim
        </label>

        {{-- Botão --}}
        <button class="w-full bg-laranja hover:bg-orange-500 text-white p-3 rounded-lg font-semibold transition">
            Entrar
        </button>

        <div class="text-center mt-4 text-sm">
            <a href="{{ route('password.request') }}" class="text-azulMedio hover:text-laranja">
                Esqueceu sua senha?
            </a>
        </div>

        <div class="text-center mt-2 text-sm">
            Não tem conta? 
            <a href="{{ route('register') }}" class="text-laranja font-semibold hover:text-orange-600">
                Criar conta
            </a>
        </div>

    </form>
</div>

@endsection
