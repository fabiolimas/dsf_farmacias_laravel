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
        Schema::create('exame_farmacias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exame_id')->constrained()->onDelete('cascade');
            $table->double('valor',5,2)->nullable();
            $table->integer('estoque')->nullable();
            $table->string('lote')->nullable();
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exame_farmacias');
    }
};
