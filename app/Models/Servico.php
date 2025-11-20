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
        'valor',
        'funcionario_id',
    ];

     public function funcionario()
    {
        return $this->belongsTo(Funcionario::class)->withDefault([
            'nome' => 'Sem funcionário'
        ]);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
