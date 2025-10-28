@extends ('layout.app')

@section('content')
<h1>Lista de Clientes</h1>

<a href="{{route('clientes.create')}}">Novo Cliente</a>
@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<ul>

@foreach ($clientes as $cliente)
    <li>
        {{ $cliente->nome }} - {{ $cliente->email }}
        <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
@endsection