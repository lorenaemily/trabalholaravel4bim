@extends('layouts.app')

@section('content')
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- CARDS --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-primary flex items-center">
                    <div class="p-3 rounded-full bg-primary/20 mr-4">
                        <svg class="w-10 h-10 text-primary" ...></svg>
                    </div>
                    <div>
                        <p class="text-gray-500">Total de Clientes</p>
                        <p class="text-2xl font-bold text-primary">{{ $clientesCount }}</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-secondary flex items-center">
                    ...
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-orange-500 flex items-center">
                    ...
                </div>

            </div>

            <div class="mt-10">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold text-primary mb-4">Resumo Geral</h3>
                    <p class="text-gray-600">Adicione aqui gráficos, relatórios ou informações adicionais.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
