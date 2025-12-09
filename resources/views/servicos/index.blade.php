@extends('layouts.app')
@section('content')

<div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-azulEscuro">Serviços</h1>

    <a href="{{ route('servicos.create') }}" class="bg-laranja hover:bg-orange-500 text-white px-5 py-2 rounded-lg font-semibold shadow">Cadastrar Serviço</a>
</div>
<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full table-auto">
       <thead class="bg-azulMedio text-white">
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Funcionários Vinculados</th>
        <th>Ações</th>
        </tr>
       </thead> 


    @foreach($servicos as $servico)
    <tr class="border-b hover:bg-gray-50 transition">
        <td class="px-4 py-3">{{ $servico->id }}</td>
        <td class="px-4 py-3">{{ $servico->nome }}</td>
        <td class="px-4 py-3">R$ {{ number_format($servico->preco, 2, ',', '.') }}</td>
        <td class="px-4 py-3">{{ $servico->descricao }}</td>
        <td class="px-4 py-3 text-center flex justify-center gap-3">
            @if($servico->funcionarios_count > 0)
                {{ $servico->funcionarios_count }} funcionário(s)
            @else
                Nenhum funcionário
            @endif
        </td>
        <td>
            <a href="{{ route('servicos.show', $servico->id) }}" class="text-blue-600 font-semibold hover:text-blue-800 ">Ver</a>
            <a href="{{ route('servicos.edit', $servico->id) }}" class="text-blue-600 font-semibold hover:text-blue-800">Editar</a>
            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')" class="text-red-600 font-semibold hover:text-red-800 ">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection
