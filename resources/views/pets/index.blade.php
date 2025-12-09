@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-azulEscuro">Pets</h1>

    <a href="{{ route('pets.create') }}"
        class="bg-laranja hover:bg-orange-500 text-white px-5 py-2 rounded-lg font-semibold shadow">
        + Novo Pet
    </a>
</div>

{{-- Tabela --}}
<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full table-auto">
        <thead class="bg-azulMedio text-white">
            <tr>
                <th class="px-4 py-3 text-left">Nome</th>
                <th class="px-4 py-3 text-left">Espécie</th>
                <th class="px-4 py-3 text-left">Raça</th>
                <th class="px-4 py-3 text-left">Dono</th>
                <th class="px-4 py-3 text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pets as $pet)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="px-4 py-3">{{ $pet->nome }}</td>
                <td class="px-4 py-3">{{ $pet->especie }}</td>
                <td class="px-4 py-3">{{ $pet->raca }}</td>
                <td class="px-4 py-3">{{ $pet->cliente->nome }}</td>

                <td class="px-4 py-3 text-center flex justify-center gap-3">

                    {{-- Editar --}}
                    <a href="{{ route('pets.edit', $pet->id) }}"
                        class="text-blue-600 font-semibold hover:text-blue-800">
                        Editar
                    </a>

                    {{-- Excluir --}}
                    <form action="{{ route('pets.destroy', $pet->id) }}" method="POST"
                        onsubmit="return confirm('Deseja mesmo excluir?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 font-semibold hover:text-red-800">
                            Excluir
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
