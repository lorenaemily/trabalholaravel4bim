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

     public function funcionario()
    {
        return $this->hasMany(Funcionario::class)->withDefault([
            'nome' => 'Sem funcionário'
        ]);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
