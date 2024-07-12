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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->nullable();
            $table->string('classe')->nullable();
            $table->string('telefone')->nullable();

            $table->string('cep')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('num_endereco')->nullable();
            $table->boolean('sem_numero_end')->default(0);
            $table->string('complemento')->nullable();

            $table->string('nome_cartao')->nullable(); // nome no cartão
            $table->string('numero_cartao')->nullable();
            $table->string('validade_cartao')->nullable();
            $table->string('cvv')->nullable();
            $table->string('cnpj_cpf_cartao')->nullable();
            
            $table->datetime('dt_pagamento')->nullable();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
