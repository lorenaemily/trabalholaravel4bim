<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Servico;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios= Funcionario::with('servico')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servico = Servico::all();
        return view('funcionarios.create', compact('servico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $request->validate([
        'nome' => 'required|string|max:255',
        'cpf' => 'required|unique:funcionarios',
        'telefone' => 'nullable|string|max:20',
        'salario' => 'required|numeric|max:255',
        'servico_id' => 'required|exists:servicos,id',
        'email' => 'required|email',
        ]);

         Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')
                         ->with( 'Funcionário contratado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario', 'servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $funcionario = Funcionario::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:funcionarios,cpf,' . $funcionario->id,
            'telefone' => 'nullable',
            'email' => 'required|email',
            'endereco' => 'nullable',
            'servico_id' => 'required|exists:servicos,id',
            'salario' => 'required|numeric',
        ]);

        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')
            ->with('message', 'Funcionário atualizado com sucesso!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $funcionario = funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->route('funcionarios.index')
            ->with('message', 'Funcionario excluido com sucesso!');
    
    }
}
