@extends('layouts.guest')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg text-center">

    <h2 class="text-2xl font-bold text-azulEscuro mb-4">Verifique seu Email</h2>

    <p class="text-gray-600 mb-6">
        Enviamos um link para verificar sua conta.  
        Caso não tenha recebido, você pode solicitar outro.
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            Um novo link foi enviado!
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="w-full bg-laranja text-white py-3 rounded-lg font-semibold hover:bg-orange-500">
            Reenviar Email de Verificação
        </button>
    </form>

</div>

@endsection
