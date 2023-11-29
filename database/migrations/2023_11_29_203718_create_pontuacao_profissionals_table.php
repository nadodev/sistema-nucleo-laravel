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
        Schema::create('pontuacao_profissionals', function (Blueprint $table) {
            $table->unsignedBigInteger('associado_id');
            $table->unsignedBigInteger('profissional_id');
            $table->unsignedInteger('pontos')->default(0);

            $table->foreign('associado_id')->references('id')->on('associados')->onDelete('cascade');
            $table->foreign('profissional_id')->references('id')->on('profissionals')->onDelete('cascade');

            $table->primary(['associado_id', 'profissional_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontuacao_profissionals');
    }
};
