<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();
        return view('servicos.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicoRequest $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);
        Servico::create($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servico = Servico::findOrFail($id);
        return view('servicos.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicoRequest $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        $servico = Servico::findOrFail($id);
        $servico->update($request->all());

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servico = Servico::with('funcionarios')->findOrFail($id);
        if ($servico->funcionarios) {
            foreach ($servico->funcionarios as $funcionario) {
                $funcionario->delete(); 
            }}

        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Serviço deletado com sucesso.');
    }
}
