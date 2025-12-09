<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // permite qualquer usuário
    }

public function rules(): array
{
    return [
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'preco' => 'required|numeric|min:0|max:999999.99', // ajuste conforme o decimal do banco
    ];
}

public function messages(): array
{
    return [
        'nome.required' => 'O nome do serviço é obrigatório.',
        'nome.string' => 'O nome do serviço deve ser um texto.',
        'nome.max' => 'O nome do serviço não pode ter mais de 255 caracteres.',

        'descricao.string' => 'A descrição deve ser um texto.',

        'preco.required' => 'O preço é obrigatório.',
        'preco.numeric' => 'O preço deve ser um número.',
        'preco.min' => 'O preço não pode ser negativo.',
        'preco.max' => 'O preço é muito alto e não pode ser salvo no sistema.',
    ];
}

    }

