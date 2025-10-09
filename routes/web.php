<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\AgendamentoController;



Route::resource('clientes', ClienteController::class);
Route::resource('pets', PetController::class);
Route::resource('funcionarios', FuncionarioController::class);
Route::resource('servicos', ServicoController::class);
Route::resource('agendamentos', AgendamentoController::class);
Route::get('/', function () {
    return view('welcome');
});
