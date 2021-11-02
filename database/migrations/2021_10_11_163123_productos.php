<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_prod');
            $table->string('fabri_prod');
            $table->string('model_prod');
            $table->string('tipo_prod');
            $table->string('descripcion');
            $table->double('prec_prod');
            $table->double('vent_prod');
            $table->double('unidades_prod');
            $table->string('estado');
            $table->string('tipo');
            $table->string('proveedor');
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
        Schema::dropIfExists('productos');
    }
}
