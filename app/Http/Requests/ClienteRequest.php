<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permite que qualquer usuário faça o request
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'endereco' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser um texto.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',

            'telefone.string' => 'O campo telefone deve ser um texto.',
            'telefone.max' => 'O campo telefone não pode ter mais de 20 caracteres.',

            'email.email' => 'O campo e-mail deve ser um e-mail válido.',
            'email.max' => 'O campo e-mail não pode ter mais de 255 caracteres.',

            'endereco.string' => 'O campo endereço deve ser um texto.',
            'endereco.max' => 'O campo endereço não pode ter mais de 255 caracteres.',
        ];
    }
}
