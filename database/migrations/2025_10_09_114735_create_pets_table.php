<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id(); // ID automático
            $table->string('nome'); // nome do pet
            $table->string('especie'); // cachorro, gato, etc
            $table->integer('idade')->nullable(); // idade opcional
            $table->string('raca'); // raça obrigatório
            $table->unsignedBigInteger('cliente_id')->nullable(); // dono (usuário)
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null'); // referência ao usuário
            $table->timestamps(); // timestamps para created_at e updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
