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
        Schema::create('registros_mensais_pontos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('associado_id');
            $table->unsignedBigInteger('profissional_id');
            $table->unsignedInteger('pontos_mensais')->default(0);
            $table->date('mes_referencia');

            $table->foreign('associado_id')->references('id')->on('associados')->onDelete('cascade');
            $table->foreign('profissional_id')->references('id')->on('profissionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_mensais_pontos');
    }
};
