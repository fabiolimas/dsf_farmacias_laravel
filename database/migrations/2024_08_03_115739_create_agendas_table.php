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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_farmacia_id')->constrained()->onDelete('cascade');
            $table->string('nome_cliente');
            $table->foreignId('exame_id')->constrained()->onDelete('cascade');
            $table->string('nome_exame');
            $table->date('data_exame');
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
            $table->string('hora_exame');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
