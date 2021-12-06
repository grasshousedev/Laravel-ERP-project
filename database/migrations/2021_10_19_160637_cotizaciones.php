<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cotizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('cliente');
            $table->string('ruc_cliente');
            $table->string('asignado');
            $table->string('moneda');
            $table->string('tiempo_expiracion');
            $table->string('estado');
            $table->string('forma_pago');
            $table->string('tiempo_entrega');
            $table->string('condiciones');
            $table->string('direccion');
            $table->text('pie_pagina');
            $table->text('requiere')->nullable();
            $table->text('operaciones')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            
            $table->foreign('cliente_id')
                    ->references('id')
                    ->on('clientes')
                    ->onDelete('set null');

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
}
