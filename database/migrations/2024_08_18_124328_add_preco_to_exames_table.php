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
        Schema::table('exames', function (Blueprint $table) {
            $table->double('preco',5,2)->nullable();
            $table->string('lote')->nullable();
            $table->string('validade_lote')->nullable();
            $table->integer('estoque')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exames', function (Blueprint $table) {
            $table->dropColumn(['preco','lote','validade_lote','estoque']);
        });
    }
};
