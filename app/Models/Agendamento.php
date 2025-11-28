<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'hora',
        'servico_id',
        'pet_id',
        'funcionario_id',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
    
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}
