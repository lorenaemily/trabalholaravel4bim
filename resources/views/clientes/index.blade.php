@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-azulEscuro">Clientes</h1>

        <a href="{{ route('clientes.create') }}"
           class="bg-laranja text-white px-4 py-2 rounded shadow hover:bg-orange-500">
            + Novo Cliente
        </a>
    </div>

    @if (session('message'))
        <div class="mb-4 p-3 bg-green-100 text-green-900 rounded">
            {{ session('message') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead class="bg-azulMedio text-white">
            <tr>
                <th class="p-3 text-left">Nome</th>
                <th class="p-3 text-left">Telefone</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">{{ $cliente->nome }}</td>
                    <td class="p-3">{{ $cliente->telefone }}</td>
                    <td class="p-3">{{ $cliente->email }}</td>
                    <td class="p-3 flex gap-3">

                        <a href="{{ route('clientes.edit', $cliente->id) }}"
                           class="text-blue-600 font-semibold hover:underline">
                            Editar
                        </a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                              method="POST"
                              onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 font-semibold hover:underline">
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
