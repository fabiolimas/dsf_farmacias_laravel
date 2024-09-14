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
        Schema::table('resultados', function (Blueprint $table) {
            $table->string('peso')->nullable();
            $table->string('fumante')->nullable();
            $table->string('gestante')->nullable();
            $table->string('usa_insulina')->nullable();
            $table->string('fumante')->nullable();
            $table->string('uso_de_medicamentos')->nullable();
            $table->string('responsavel')->nullable();
            $table->longText('bibliografia')->nullable();
            $table->string('crf_responsavel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resultados', function (Blueprint $table) {
            //
        });
    }
};
