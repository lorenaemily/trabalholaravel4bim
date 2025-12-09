@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold text-azulEscuro mb-6">Editar Serviço</h1>

    <form action="{{ route('servicos.update', $servico->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Nome -->
        <div>
            <label class="font-semibold text-azulEscuro">Nome</label>
            <input type="text" name="nome" required
                   value="{{ $servico->nome }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <!-- Descrição -->
        <div>
            <label class="font-semibold text-azulEscuro">Descrição</label>
            <textarea name="descricao" rows="4" required
                      class="w-full border rounded p-2 mt-1 focus:ring-laranja">{{ $servico->descricao }}</textarea>
        </div>

        <!-- Preço -->
        <div>
            <label class="font-semibold text-azulEscuro">Preço</label>
            <input type="number" name="preco" step="0.01" required
                   value="{{ $servico->preco }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <button class="bg-laranja text-white px-6 py-2 rounded shadow hover:bg-orange-500">
            Atualizar
        </button>

        <a href="{{ route('servicos.index') }}" class="ml-4 text-gray-600 hover:underline">
            Cancelar
        </a>
    </form>
</div>

@endsection
