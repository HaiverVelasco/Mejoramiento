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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('cantidad');
            $table->text('concepto');
            $table->date('fecha_pago');
            $table->foreignId('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreignId('tipo_pago_id')->references('id')->on('tipo_pagos')->onDelete('cascade');
            $table->foreignId('colaborador_id')->references('id')->on('colaboradors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
