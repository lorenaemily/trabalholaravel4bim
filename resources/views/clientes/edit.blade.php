@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6 max-w-3xl mx-auto">

    <h1 class="text-2xl font-bold text-azulEscuro mb-6">Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="font-semibold text-azulEscuro">Nome</label>
            <input type="text" name="nome" value="{{ $cliente->nome }}" required
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <div>
            <label class="font-semibold text-azulEscuro">Telefone</label>
            <input type="text" name="telefone" value="{{ $cliente->telefone }}" required
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <div>
            <label class="font-semibold text-azulEscuro">Email</label>
            <input type="email" name="email" value="{{ $cliente->email }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <button
            class="bg-laranja text-white px-6 py-2 rounded shadow hover:bg-orange-500">
            Atualizar
        </button>

        <a href="{{ route('clientes.index') }}" class="ml-4 text-gray-600 hover:underline">
            Cancelar
        </a>
    </form>
</div>

@endsection
