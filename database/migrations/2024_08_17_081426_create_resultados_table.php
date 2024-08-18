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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_farmacia_id')->constrained()->onDelete('cascade');
            $table->foreignId('agendas_id')->constrained()->onDelete('cascade');
            $table->longText('perguntas')->nullable();
            $table->string('braco_aferido')->nullable();
            $table->string('resultado_sistolica')->nullable();
            $table->string('resultado_distolica')->nullable();
            $table->string('glicemia')->nullable();
            $table->string('result_glicemia')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('result_temperatura')->nullable();
            $table->string('injetaveis')->nullable();
            $table->string('medicamento')->nullable();
            $table->string('concentracao')->nullable();
            $table->string('lote')->nullable();
            $table->string('validade')->nullable();
            $table->string('ms')->nullable();
            $table->string('dcb')->nullable();
            $table->string('via_ministracao')->nullable();
            $table->string('medico_responsavel')->nullable();
            $table->string('crm')->nullable();
            $table->string('endereco_medico')->nullable();
            $table->string('telefone_medico')->nullable();
            $table->string('nome_fab_auricular')->nullable();
            $table->string('cnpj_fab_auricular')->nullable();
            $table->string('lote_pistola')->nullable();
            $table->string('lote_brinco')->nullable();
            $table->string('responsavel_atendimento')->nullable();
            $table->longText('observacoes')->nullable();
            
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};
