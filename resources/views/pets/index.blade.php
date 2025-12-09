@extends ('layouts.app')

@section('content')
<h1>Lista de Pets</h1>

<a href="{{route('pets.create')}}">Novo Pet</a>
@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<ul>

@foreach ($pets as $pet)
    <li>
        <strong>{{ $pet->nome }}</strong> 
                - {{ $pet->especie }} 
                @if($pet->raca) ({{ $pet->raca }}) @endif 
                - {{ $pet->idade ? $pet->idade . ' anos' : 'Idade não informada' }}
                @if($pet->cliente)
                    - Dono: {{ $pet->cliente->nome }}
                @endif

        <a href="{{ route('pets.edit', $pet->id) }}">Editar</a>

      <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este pet?')"> Excluir </button>
        </form>

    </li>
@endforeach
</ul>
@endsection