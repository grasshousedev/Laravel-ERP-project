<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Salidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo');
            $table->string('nombre');
            $table->string('fabricante');
            $table->string('modelo');
            $table->string('categoria');
            $table->string('precio_venta');
            $table->string('lote');
            $table->string('unidad_medida');
            $table->double('unidades');
            $table->string('descripcion');
            $table->string('ruc_cliente');
            $table->string('razon_social');
            $table->string('guia');
            $table->string('almacen');
            $table->string('occ');
            $table->string('cot');
            $table->string('vendedor');
            $table->string('responsable');
            $table->string('moneda');
            $table->string('serial');
            $table->string('id_ingreso');
            $table->date('fecha_salida');
            $table->time('hora_salida');

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
        Schema::dropIfExists('salidas');
    }
}
