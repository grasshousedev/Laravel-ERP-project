<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo');
            $table->string('nombre');
            $table->string('fabricante');
            $table->string('modelo');
            $table->string('categoria');
            $table->double('precio_costo');
            $table->string('lote');
            $table->string('unidad_medida');
            $table->integer('unidades');
            $table->string('descripcion');
            $table->string('ruc_provee');
            $table->string('razon_social');
            $table->string('guia');
            $table->string('almacen');
            $table->string('oc_proveedor');
            $table->string('orden_pedido');
            $table->string('moneda');
            $table->string('serial');
            $table->date('fecha_ingreso');
            $table->time('hora_ingreso');
            $table->string('id_ingreso');

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
        Schema::dropIfExists('stocks');

    }
}