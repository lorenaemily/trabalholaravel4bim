<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Agendamento;
use App\Models\Funcionario;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'clientesCount' => Cliente::count(),
            'agendamentosCount' => Agendamento::count(),
            'funcionariosCount' => Funcionario::count(),
        ]);
    }
}


