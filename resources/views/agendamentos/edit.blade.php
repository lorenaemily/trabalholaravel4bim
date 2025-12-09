@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6 max-w-3xl mx-auto">

    <h1 class="text-2xl font-bold text-azulEscuro mb-6">Editar Agendamento</h1>

    <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Cliente -->
        <div>
            <label class="font-semibold text-azulEscuro">Cliente</label>
            <select name="cliente_id" required class="w-full border p-2 rounded focus:ring-laranja">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}"
                        {{ $cliente->id == $agendamento->cliente_id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Pet -->
        <div>
            <label class="font-semibold text-azulEscuro">Pet</label>
            <select name="pet_id" required class="w-full border p-2 rounded focus:ring-laranja">
                @foreach ($pets as $pet)
                    <option value="{{ $pet->id }}"
                        {{ $pet->id == $agendamento->pet_id ? 'selected' : '' }}>
                        {{ $pet->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Serviço -->
        <div>
            <label class="font-semibold text-azulEscuro">Serviço</label>
            <select name="servico_id" required class="w-full border p-2 rounded focus:ring-laranja">
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}"
                        {{ $servico->id == $agendamento->servico_id ? 'selected' : '' }}>
                        {{ $servico->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Funcionário -->
        <div>
            <label class="font-semibold text-azulEscuro">Funcionário</label>
            <select name="funcionario_id" required class="w-full border p-2 rounded focus:ring-laranja">
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}"
                        {{ $funcionario->id == $agendamento->funcionario_id ? 'selected' : '' }}>
                        {{ $funcionario->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Data hora -->
        <div>
            <label class="font-semibold text-azulEscuro">Data e Hora</label>
            <input type="datetime-local" name="data_hora"
                   value="{{ date('Y-m-d\TH:i', strtotime($agendamento->data_hora)) }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
        </div>

        <button
            class="bg-laranja text-white px-6 py-2 rounded shadow hover:bg-orange-500">
            Atualizar
        </button>

        <a href="{{ route('agendamentos.index') }}" class="ml-4 text-gray-600 hover:underline">
            Cancelar
        </a>

    </form>
</div>

@endsection
