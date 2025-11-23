<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'servico_id');
    }


    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
