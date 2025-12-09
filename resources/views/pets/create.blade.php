@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-azulEscuro mb-6">Cadastrar Pet</h1>

<div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl">

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf

        {{-- Nome --}}
        <label class="block font-semibold text-gray-700">Nome do Pet</label>
        <input type="text" name="nome" value="{{ old('nome') }}"
               class="w-full p-3 border rounded-lg mb-1 focus:ring-2 focus:ring-azulMedio">
        @error('nome')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        {{-- Espécie --}}
        <label class="block font-semibold text-gray-700">Espécie</label>
        <input type="text" name="especie" value="{{ old('especie') }}"
               class="w-full p-3 border rounded-lg mb-1 focus:ring-2 focus:ring-azulMedio">
        @error('especie')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        {{-- Raça --}}
        <label class="block font-semibold text-gray-700">Raça</label>
        <input type="text" name="raca" value="{{ old('raca') }}"
               class="w-full p-3 border rounded-lg mb-1 focus:ring-2 focus:ring-azulMedio">
        @error('raca')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        {{-- Cliente Dono --}}
        <label class="block font-semibold text-gray-700">Dono</label>
        <select name="cliente_id"
                class="w-full p-3 border rounded-lg mb-1 text-gray-700 focus:ring-2 focus:ring-azulMedio">
            <option value="">Selecione o dono</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>
        @error('cliente_id')
            <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
        @enderror

        {{-- Botões --}}
        <div class="flex justify-between mt-6">
            <a href="{{ route('pets.index') }}"
                class="px-6 py-2 rounded-lg font-semibold bg-gray-300 hover:bg-gray-400">
                Cancelar
            </a>

            <button class="px-6 py-2 bg-laranja text-white rounded-lg font-semibold hover:bg-orange-500">
                Salvar
            </button>
        </div>

    </form>

</div>

@endsection
