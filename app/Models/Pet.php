<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
  use HasFactory;

   
    protected $fillable = [
        'nome',
        'especie',
        'idade',
        'raca',
        'cliente_id',
    ];

     public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

}
