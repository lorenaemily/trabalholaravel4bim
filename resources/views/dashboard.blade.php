@extends('layouts.app')

@section('content')

<div class="space-y-10">

    {{-- TÍTULO --}}
    <div>
        <h1 class="text-3xl font-bold text-azulEscuro">Dashboard</h1>
        <p class="text-gray-600">Visão geral do sistema PetShop</p>
    </div>

    {{-- CARDS ESTATÍSTICOS --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- CARD CLIENTES --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-azulEscuro flex items-center">
            <div class="p-4 bg-azulEscuro/10 rounded-full mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-azulEscuro" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0v-3a3 3 0 00-6 0v3m6 0H9" />
                </svg>
            </div>
            <div>
                <p class="text-gray-500">Total de Clientes</p>
                <p class="text-3xl font-bold text-azulEscuro">{{ $clientesCount }}</p>
            </div>
        </div>

        {{-- CARD AGENDAMENTOS --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-azulMedio flex items-center">
            <div class="p-4 bg-azulMedio/10 rounded-full mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-azulMedio" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                </svg>
            </div>
            <div>
                <p class="text-gray-500">Agendamentos</p>
                <p class="text-3xl font-bold text-azulMedio">{{ $agendamentosCount }}</p>
            </div>
        </div>

        {{-- CARD FUNCIONÁRIOS --}}
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-laranja flex items-center">
            <div class="p-4 bg-laranja/10 rounded-full mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-laranja" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A4 4 0 018.99 15h6.02a4 4 0 013.869 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div>
                <p class="text-gray-500">Funcionários</p>
                <p class="text-3xl font-bold text-laranja">{{ $funcionariosCount }}</p>
            </div>
        </div>

    </div>

    {{-- SEÇÃO DE GRÁFICOS / RESUMO --}}
    <div class="bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-azulEscuro mb-4">Resumo Geral</h2>
        <p class="text-gray-600">
            Aqui você pode adicionar gráficos, relatórios ou insights importantes sobre o funcionamento da PetShop.
        </p>

        {{-- LUGAR PARA GRÁFICO FUTURO --}}
        <div class="mt-6 h-64 bg-fundo border border-gray-300 rounded-lg flex items-center justify-center">
            <p class="text-gray-500">Gráfico ou estatísticas futuras aparecerão aqui</p>
        </div>
    </div>

    {{-- SEÇÃO DE AÇÕES RÁPIDAS --}}
    <div>
        <h2 class="text-2xl font-bold text-azulEscuro mb-4">Ações Rápidas</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <a href="/clientes" class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <div class="p-3 bg-azulEscuro/10 rounded-full">
                        <svg class="w-8 h-8 text-azulEscuro" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A4 4 0 018.99 15h6.02a4 4 0 013.869 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-700">Clientes</span>
                </div>
            </a>

            <a href="/pets" class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <div class="p-3 bg-azulMedio/10 rounded-full">
                        <svg class="w-8 h-8 text-azulMedio" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4 7a4 4 0 118 0 4 4 0 01-8 0zm8 10c0-2.21-3.582-4-8-4s-8 1.79-8 4v2h16v-2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-700">Pets</span>
                </div>
            </a>

            <a href="/agendamentos" class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <div class="p-3 bg-laranja/10 rounded-full">
                        <svg class="w-8 h-8 text-laranja" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-700">Agendamentos</span>
                </div>
            </a>

            <a href="/funcionarios" class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <div class="p-3 bg-azulEscuro/10 rounded-full">
                        <svg class="w-8 h-8 text-azulEscuro" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M16 11a4 4 0 11-8 0 4 4 0 018 0zm6 10v-3a6 6 0 00-12 0v3m12 0H4" />
                        </svg>
                    </div>
                    <span class="font-semibold text-gray-700">Funcionários</span>
                </div>
            </a>

        </div>
    </div>

</div>

@endsection
