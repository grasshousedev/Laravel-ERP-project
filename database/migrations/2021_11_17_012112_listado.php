<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Listado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listados', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo');
            $table->string('producto');
            $table->string('notas')->nullable();
            $table->double('cantidad_prod');
            $table->string('proveedor');
            $table->string('moneda');
            $table->string('cotizacion_id');
            $table->string('listado')->default('btn-success');
            $table->double('precio_prod');
            $table->string('codigo_cotizacion')->nullable();
            $table->string('tiempo_entrega');
            $table->string('responsable');
            $table->string('ocp');

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
        Schema::dropIfExists('listados');
    }
}
