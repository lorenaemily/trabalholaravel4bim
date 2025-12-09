<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $funcionarioId = $this->route('funcionario'); // usado no update

        return [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|unique:funcionarios,cpf,' . $funcionarioId,
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email',
            'endereco' => 'nullable|string|max:255',
            'salario' => 'required|numeric|min:0',
            'servico_id' => 'required|exists:servicos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.max' => 'O nome não pode ter mais de 255 caracteres.',

            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está cadastrado.',

            'telefone.max' => 'O telefone não pode ter mais de 20 caracteres.',

            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser válido.',

            'endereco.max' => 'O endereço não pode ter mais de 255 caracteres.',

            'salario.required' => 'O salário é obrigatório.',
            'salario.numeric' => 'O salário deve ser um número.',
            'salario.min' => 'O salário não pode ser negativo.',

            'servico_id.required' => 'É necessário escolher um serviço.',
            'servico_id.exists' => 'O serviço selecionado não é válido.',
        ];
    }
}
