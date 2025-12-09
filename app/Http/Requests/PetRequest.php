<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // permite que qualquer usuário faça o request
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:100',
            'idade' => 'nullable|integer|min:0',
            'raca' => 'required|string|max:255',
            'cliente_id' => 'nullable|exists:clientes,id', // precisa existir na tabela clientes
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do pet é obrigatório.',
            'nome.string' => 'O nome do pet deve ser um texto.',
            'nome.max' => 'O nome do pet não pode ter mais de 255 caracteres.',

            'especie.required' => 'A espécie do pet é obrigatória.',
            'especie.string' => 'A espécie deve ser um texto.',
            'especie.max' => 'A espécie não pode ter mais de 100 caracteres.',

            'idade.integer' => 'A idade deve ser um número inteiro.',
            'idade.min' => 'A idade não pode ser negativa.',

            'raca.required' => 'A raça do pet é obrigatória.',
            'raca.string' => 'A raça deve ser um texto.',
            'raca.max' => 'A raça não pode ter mais de 255 caracteres.',

            'cliente_id.exists' => 'O cliente selecionado não existe.',
        ];
    }
}
