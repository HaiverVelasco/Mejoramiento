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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->text('otros_datos');
            $table->integer('num_plazas');
            $table->date('fecha');
            $table->foreignId('viajero_id')->references('id')->on('viajeros')->onDelete('cascade');
            $table->foreignId('origen_id')->references('id')->on('origens')->onDelete('cascade');
            $table->foreignId('destino_id')->references('id')->on('destinos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
