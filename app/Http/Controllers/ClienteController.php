<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes',
        'telefone' => 'nullable|string|max:20',
        'endereco' => 'nullable|string|max:255',
        ]);

         Cliente::create($request->all());

        return redirect()->route('clientes.index')
                         ->with( 'Cliente criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id, // ignora o próprio cliente
            'telefone' => 'nullable|string|max:20',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('message', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('message', 'Cliente excluído com sucesso!');
    
    }
}
