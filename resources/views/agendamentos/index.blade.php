@extends ('layout.app')

@section('content')
<h1>Lista de Agendamentos</h1>

<a href="{{route('agendamentos.create')}}">Novo Agendamento</a>
@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<ul>

@foreach ($agendamentos as $agendamento)
    <li>
        <strong>{{ $agendamento->data }} {{ $agendamento->hora }}</strong> 
                - {{ $agendamento->servico->nome }} 
                - {{ $agendamento->funcionario->nome }} 
                - {{ $agendamento->pet->raca }}
                - {{ $agendamento->cliente->nome }}
       
        <a href="{{ route('agendamentos.edit', $agendamento->id) }}">Editar</a>

      <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este agendamento ?')"> Excluir </button>
        </form>

    </li>
@endforeach
</ul>
@endsection