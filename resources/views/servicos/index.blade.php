@extends ('layout.app')

@section('content')
<h1>Lista de Serviços</h1>

<a href="{{route('servicos.create')}}">Novo Serviço</a>
@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<ul>

@foreach ($servicos as $servico)
    <li>
        {{ $servico->nome }} - R$ {{ number_format($servico->preco, 2, ',', '.') }} - {{ $servico->descricao }} 

        @if($servico->funcionarios->count() > 0)
            - Funcionários: 
            @foreach ($servico->funcionarios as $funcionario)
                {{ $funcionario->nome }}@if (!$loop->last), @endif
            @endforeach

        @else
            - Sem funcionários
        @endif

        <a href="{{ route('servicos.edit', $servico->id) }}">Editar</a>
        <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este serviço?')">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
@endsection