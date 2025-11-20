@extends ('layout.app')

@section('content')
<h1>Lista de Funcionários</h1>

<a href="{{ route('funcionarios.create') }}">Novo Funcionário</a>

@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<ul>
@foreach ($funcionarios as $funcionario)
    <li>
        {{ $funcionario->nome }} -
        {{ $funcionario->servico ? $funcionario->servico->nome : 'Sem serviço' }} -
        {{ $funcionario->salario }} -
        {{ $funcionario->telefone }} -
        {{ $funcionario->email }} -
        {{ $funcionario->endereco }} -
        {{ $funcionario->cpf }}
        |

        <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>

        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}"
              method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit"
                onclick="return confirm('Tem certeza que deseja excluir este funcionário ?')">
                Excluir
            </button>
        </form>
    </li>
@endforeach
</ul>
@endsection
