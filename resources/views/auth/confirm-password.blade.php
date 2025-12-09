@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h2 class="text-2xl font-bold text-azulEscuro mb-6 text-center">Confirmar Senha</h2>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label class="block mb-2 font-semibold text-gray-700">Senha</label>
        <input type="password" name="password"
               class="w-full p-3 border rounded-lg mb-6">

        <button class="w-full bg-laranja text-white p-3 rounded-lg font-semibold hover:bg-orange-500">
            Confirmar
        </button>
    </form>

</div>

@endsection
