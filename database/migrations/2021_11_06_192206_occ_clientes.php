<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OccClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occ_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('razon');
            $table->string('descripcion');
            $table->string('cot');
            $table->string('tiempo_entrega');
            $table->string('archivo');
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
        Schema::dropIfExists('occ_clientes');
    }
}
