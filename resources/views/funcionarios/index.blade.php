@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-8">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-[#0A1A2F]">Funcionários</h1>

        <a href="{{ route('funcionarios.create') }}"
           class="bg-[#FF8A00] hover:bg-[#e67a00] text-white font-semibold py-2 px-4 rounded-lg shadow">
            + Novo Funcionário
        </a>
    </div>

    @if (session('message'))
        <div class="mb-4 p-3 rounded bg-green-100 text-green-800 border border-green-300">
            {{ session('message') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200">
        <table class="w-full text-left">
            <thead class="bg-[#0A1A2F] text-white">
                <tr>
                    <th class="py-3 px-4">Nome</th>
                    <th class="py-3 px-4">Serviço</th>
                    <th class="py-3 px-4">Salário</th>
                    <th class="py-3 px-4">Telefone</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Endereço</th>
                    <th class="py-3 px-4">CPF</th>
                    <th class="py-3 px-4 text-center">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $funcionario->nome }}</td>

                        <td class="py-3 px-4">
                            {{ $funcionario->servico ? $funcionario->servico->nome : 'Sem serviço' }}
                        </td>

                        <td class="py-3 px-4">R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                        <td class="py-3 px-4">{{ $funcionario->telefone }}</td>
                        <td class="py-3 px-4">{{ $funcionario->email }}</td>
                        <td class="py-3 px-4">{{ $funcionario->endereco }}</td>
                        <td class="py-3 px-4">{{ $funcionario->cpf }}</td>

                        <td class="py-3 px-4 flex gap-2 justify-center">

                            <a href="{{ route('funcionarios.edit', $funcionario->id) }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded shadow">
                                Editar
                            </a>

                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded shadow">
                                    Excluir
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
