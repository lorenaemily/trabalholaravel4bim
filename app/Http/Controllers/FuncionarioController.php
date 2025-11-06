<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios= Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $request->validate([
        'nome' => 'required|string|max:255',
        'cargo' => 'required|string|max:255',
        'telefone' => 'nullable|string|max:20',
        'salario' => 'nullable|string|max:255',
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
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $funcionario = Funcionario::findOrFail($id);

        $request->validate([
        'nome' => 'required|string|max:255',
        'cargo' => 'required|string|max:255',
        'telefone' => 'nullable|string|max:20',
        'salario' => 'nullable|string|max:255',
        ]);

        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')
            ->with('message', 'Funcionário atualizado com sucesso!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        //
    }
}
