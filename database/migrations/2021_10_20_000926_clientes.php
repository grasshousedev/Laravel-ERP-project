<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('razon_social');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('celular1');
            $table->string('celular2')->nullable();
            $table->string('email1');
            $table->string('email2', )->nullable();
            $table->string('paginaweb')->nullable();
            $table->string('area');
            $table->string('estado');
            $table->string('asignado');
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
        Schema::dropIfExists('clientes');
    }
}
