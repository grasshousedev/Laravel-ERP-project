<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistroIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_ingresos', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo');
            $table->string('nombre');
            $table->string('fabricante');
            $table->string('modelo');
            $table->string('categoria');
            $table->string('precio_costo');
            $table->string('lote');
            $table->string('unidad_medida');
            $table->double('unidades');
            $table->string('descripcion');
            $table->string('ruc_provee');
            $table->string('razon_social');
            $table->string('guia');
            $table->string('almacen');
            $table->string('oc_proveedor');
            $table->string('orden_pedido');
            $table->string('moneda');

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
        Schema::dropIfExists('almacen_ingresos');
    }
}
