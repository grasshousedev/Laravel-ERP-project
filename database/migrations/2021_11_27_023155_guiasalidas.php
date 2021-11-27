<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guiasalidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia_salidas', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('razon');
            $table->string('direccion');
            $table->string('fecha_llegada');
            $table->string('hora_llegada');
            $table->string('archivo');
            $table->string('oop');
            $table->string('numero_guia');
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
        Schema::dropIfExists('guia_salidas');
    }
}
