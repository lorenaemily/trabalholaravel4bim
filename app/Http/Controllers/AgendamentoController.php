<?php

namespace App\Http\Controllers;
use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Servico;
use App\Models\Pet;
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
        $clientes=Cliente::All();
        $funcionarios=Funcionario::All();
        $servicos=Servico::All();
        $pets=Pet::All();  
        return view('agendamentos.create', compact('clientes','funcionarios','servicos','pets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgendamentoRequest $request)
    {
        Agendamento::create($request->validated());
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
        $clientes = Cliente::all();
        $pets = Pet::all();
        $servicos = Servico::all();
        $funcionarios = Funcionario::all();

        return view('agendamentos.edit', compact('agendamento', 'clientes', 'pets', 'servicos', 'funcionarios'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(AgendamentoRequest $request, $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->validated());
        return redirect()
            ->route('agendamentos.index')
            ->with('success', 'Agendamento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();
        return redirect()
            ->route('agendamentos.index')
            ->with('success', 'Agendamento deletado com sucesso.');
    }
}
