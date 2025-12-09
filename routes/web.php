<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

    Route::resource('clientes', ClienteController::class);
    Route::resource('pets', PetController::class);
    Route::resource('servicos', ServicoController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('agendamentos', AgendamentoController::class);

});

