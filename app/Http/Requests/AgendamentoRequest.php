<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // permite que qualquer usuário autenticado faça a requisição
    }

    public function rules(): array
    {
        return [
            'data' => 'required|date',
            'hora' => 'required',
            'servico_id' => 'required|exists:servicos,id',
            'pet_id' => 'required|exists:pets,id',
            'funcionario_id' => 'required|exists:funcionarios,id',
            'cliente_id' => 'required|exists:clientes,id',
        ];
    }

    public function messages(): array
    {
        return [
            'data.required' => 'A data do agendamento é obrigatória.',
            'data.date' => 'A data deve ser válida.',
            'hora.required' => 'O horário do agendamento é obrigatório.',
            'servico_id.required' => 'Selecione um serviço.',
            'servico_id.exists' => 'O serviço selecionado não é válido.',
            'pet_id.required' => 'Selecione um pet.',
            'pet_id.exists' => 'O pet selecionado não é válido.',
            'funcionario_id.required' => 'Selecione um funcionário.',
            'funcionario_id.exists' => 'O funcionário selecionado não é válido.',
            'cliente_id.required' => 'Selecione um cliente.',
            'cliente_id.exists' => 'O cliente selecionado não é válido.',
        ];
    }
}
