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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');
            $table->unsignedBigInteger('funcionario_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
