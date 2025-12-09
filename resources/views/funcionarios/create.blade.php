@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 border border-gray-200">

    <h1 class="text-3xl font-bold mb-6 text-[#0A1F44]">
        ➕ Cadastrar Funcionário
    </h1>

    <form action="{{ route('funcionarios.store') }}" method="POST" class="space-y-4">
        @csrf

        {{-- Nome --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Nome</label>
            <input type="text" name="nome"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        {{-- Serviço --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Serviço</label>
            <select name="servico_id"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
                <option value="">Selecione...</option>
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
                @endforeach
            </select>
        </div>

        {{-- Salário --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Salário</label>
            <input type="number" step="0.01" name="salario"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        {{-- Telefone --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Telefone</label>
            <input type="text" name="telefone"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        {{-- Email --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Email</label>
            <input type="email" name="email"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        {{-- Endereço --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Endereço</label>
            <input type="text" name="endereco"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        {{-- CPF --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">CPF</label>
            <input type="text" name="cpf"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('funcionarios.index') }}"
               class="px-4 py-2 rounded-lg bg-[#0A1F44] text-white hover:bg-[#122c5f] transition">
                Voltar
            </a>

            <button type="submit"
                class="px-6 py-2 rounded-lg bg-[#F97316] text-white font-bold hover:bg-[#ea630b] transition">
                Salvar
            </button>
        </div>

    </form>
</div>
@endsection
