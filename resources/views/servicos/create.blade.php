@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold text-azulEscuro mb-6">Cadastrar Serviço</h1>

    <form action="{{ route('servicos.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nome -->
        <div>
            <label class="font-semibold text-azulEscuro">Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" required
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Descrição -->
        <div>
            <label class="font-semibold text-azulEscuro">Descrição</label>
            <textarea name="descricao" rows="4" required
                      class="w-full border rounded p-2 mt-1 focus:ring-laranja">{{ old('descricao') }}</textarea>
            @error('descricao')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Preço -->
        <div>
            <label class="font-semibold text-azulEscuro">Preço</label>
            <input type="number" name="preco" step="0.01" value="{{ old('preco') }}" required
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
            @error('preco')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button class="bg-laranja text-white px-6 py-2 rounded shadow hover:bg-orange-500">
            Salvar
        </button>

        <a href="{{ route('servicos.index') }}" class="ml-4 text-gray-600 hover:underline">
            Cancelar
        </a>
    </form>
</div>

@endsection
