@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 border border-gray-200">

    <h1 class="text-3xl font-bold mb-6 text-[#0A1F44]">
        ✏️ Editar Funcionário
    </h1>

    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Nome --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Nome</label>
            <input type="text" name="nome" value="{{ old('nome', $funcionario->nome) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Serviço --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Serviço</label>
            <select name="servico_id"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}"
                        {{ old('servico_id', $funcionario->servico_id) == $servico->id ? 'selected' : '' }}>
                        {{ $servico->nome }}
                    </option>
                @endforeach
            </select>
            @error('servico_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Salário --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Salário</label>
            <input type="text" id="salario" name="salario" value="{{ old('salario', $funcionario->salario) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('salario')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Telefone --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('telefone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Email</label>
            <input type="email" name="email" value="{{ old('email', $funcionario->email) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Endereço --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">Endereço</label>
            <input type="text" name="endereco" value="{{ old('endereco', $funcionario->endereco) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('endereco')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- CPF --}}
        <div>
            <label class="block font-semibold text-[#0A1F44]">CPF</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $funcionario->cpf) }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#F97316] outline-none"
                required>
            @error('cpf')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('funcionarios.index') }}"
               class="px-4 py-2 rounded-lg bg-[#0A1F44] text-white hover:bg-[#122c5f] transition">
                Voltar
            </a>

            <button type="submit"
                class="px-6 py-2 rounded-lg bg-[#F97316] text-white font-bold hover:bg-[#ea630b] transition">
                Atualizar
            </button>
        </div>

    </form>
</div>

{{-- iMask Script --}}
@section('scripts')

<script>
    // CPF Mask
    var cpfMask = IMask(
        document.getElementById('cpf'), {
            mask: '000.000.000-00'
        }
    );

    // Telefone Mask
    var telMask = IMask(
        document.getElementById('telefone'), {
            mask: '(00) 00000-0000'
        }
    );

    // Salário Mask
    var salarioMask = IMask(
        document.getElementById('salario'), {
            mask: Number,
            scale: 2,
            thousandsSeparator: '.',
            radix: ',',
            mapToRadix: ['.']
        }
    );
</script>
@endsection
@endsection
