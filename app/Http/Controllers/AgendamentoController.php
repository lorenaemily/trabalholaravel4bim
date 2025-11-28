<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agendamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|date',
            'hora' => 'required|time',
            'servico_id' => 'required|exists:servicos,id',
            'pet_id' => 'required|exists:pets,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        Agendamento::create($request->all());
        return redirect()
            ->route('agendamentos.index')
            ->with('success', 'Agendamento criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.edit', compact('agendamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'data' => 'required|date',
            'hora' => 'required|time',
            'servico_id' => 'required|exists:servicos,id',
            'pet_id' => 'required|exists:pets,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        Agendamento::update($request->all());
        return redirect()
            ->route('agendamentos.index')
            ->with('success', 'Agendamento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }
}
