<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cargo',
        'salario',
        'telefone',
        'email',
        'servico_id',
        'cpf',
    ];
    
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }

    public function servicos()
    {
        return $this->belongsTo(Servico::class);
    }

}
