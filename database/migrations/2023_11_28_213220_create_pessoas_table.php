<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agente_id')->references('id')->on('agentes');
            $table->foreignId('unidade_id')->references('id')->on('unidades');
            $table->string('nome');
            $table->string('cpf');
            $table->string('nome_mae');
            $table->string('data_nascimento');
            $table->string('telefone');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
