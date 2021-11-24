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
            $table->string('alm');
            $table->string('serial');
            $table->string('fabricante');
            $table->string('modelo');
            $table->string('categoria');
            $table->string('precio_costo');
            $table->string('lote');
            $table->string('unidad_medida');
            $table->double('unidades');
            $table->string('moneda');
            $table->string('descripcion');
            $table->string('ruc_proveedor');
            $table->string('razon_social');
            $table->string('guia');
            $table->string('almacen');
            $table->string('ocp');
            $table->string('op');
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
