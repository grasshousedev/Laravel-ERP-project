<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OccProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocproveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruc');
            $table->string('responsable');
            $table->string('tiempo_entrega');
            $table->string('contacto');
            $table->string('estado');
            $table->string('moneda');
            $table->string('razon_social');
            $table->string('direccion');
            $table->string('cot_proveedor')->nullable();
            $table->unsignedBigInteger('proveedor_id')->nullable();
            
            $table->foreign('proveedor_id')
                    ->references('id')
                    ->on('proveedores')
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
        Schema::dropIfExists('ocproveedores');
    }
}
