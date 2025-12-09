@extends('layouts.app')

@section('content')

<div class="bg-white shadow-md rounded-lg p-6 max-w-3xl mx-auto">

    <h1 class="text-2xl font-bold text-azulEscuro mb-6">Novo Agendamento</h1>

    <form action="{{ route('agendamentos.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Cliente -->
        <div>
            <label class="font-semibold text-azulEscuro">Cliente</label>
            <select name="cliente_id" required
                    class="w-full border rounded p-2 mt-1 focus:ring-laranja">
                <option value="">Selecione...</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
            @error('cliente_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Pet -->
        <div>
            <label class="font-semibold text-azulEscuro">Pet</label>
            <select name="pet_id" required
                    class="w-full border rounded p-2 mt-1 focus:ring-laranja">
                <option value="">Selecione...</option>
                @foreach ($pets as $pet)
                    <option value="{{ $pet->id }}" {{ old('pet_id') == $pet->id ? 'selected' : '' }}>
                        {{ $pet->nome }}
                    </option>
                @endforeach
            </select>
            @error('pet_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Serviço -->
        <div>
            <label class="font-semibold text-azulEscuro">Serviço</label>
            <select name="servico_id" required
                    class="w-full border rounded p-2 mt-1 focus:ring-laranja">
                <option value="">Selecione...</option>
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}" {{ old('servico_id') == $servico->id ? 'selected' : '' }}>
                        {{ $servico->nome }}
                    </option>
                @endforeach
            </select>
            @error('servico_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Funcionário -->
        <div>
            <label class="font-semibold text-azulEscuro">Funcionário</label>
            <select name="funcionario_id" required
                    class="w-full border rounded p-2 mt-1 focus:ring-laranja">
                <option value="">Selecione...</option>
                @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" {{ old('funcionario_id') == $funcionario->id ? 'selected' : '' }}>
                        {{ $funcionario->nome }}
                    </option>
                @endforeach
            </select>
            @error('funcionario_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Data -->
        <div>
            <label class="font-semibold text-azulEscuro">Data</label>
            <input type="date" name="data" required
                   value="{{ old('data') }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
            @error('data')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Hora -->
        <div>
            <label class="font-semibold text-azulEscuro">Hora</label>
            <input type="time" name="hora" required
                   value="{{ old('hora') }}"
                   class="w-full border rounded p-2 mt-1 focus:ring-laranja">
            @error('hora')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button
            class="bg-laranja text-white px-6 py-2 rounded shadow hover:bg-orange-500">
            Salvar
        </button>

        <a href="{{ route('agendamentos.index') }}" class="ml-4 text-gray-600 hover:underline">
            Cancelar
        </a>
    </form>
</div>

@endsection
