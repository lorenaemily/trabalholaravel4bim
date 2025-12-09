@extends('layouts.app')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow shadow-lg">

    <h2 class="text-2xl font-bold text-azulEscuro mb-6 text-center">Recuperar Senha</h2>

    <p class="text-gray-600 text-sm mb-4">
        Informe seu email e enviaremos um link para redefinir sua senha.
    </p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label class="block mb-2 font-semibold text-gray-700">Email</label>
        <input type="email" name="email"
               class="w-full p-3 border rounded-lg mb-6 focus:ring-2 focus:ring-azulMedio">

        <button class="w-full bg-laranja text-white p-3 rounded-lg font-semibold hover:bg-orange-500">
            Enviar Link
        </button>
    </form>

</div>

@endsection
