<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_productos', function (Blueprint $table) {
            $table->id();
            
            $table->string('info_producto');
            // $table->double('cantidad_prod');
            // $table->double('precio_prod');
            // $table->double('total_prod');

            // $table->double('sub_total');
            // $table->double('igv_sub');
            // $table->double('total_neto');

            $table->unsignedBigInteger('cotizacion_id')->nullable();
            
            $table->foreign('cotizacion_id')
                    ->references('id')
                    ->on('cotizaciones')
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
        Schema::dropIfExists('cliente_productos');
    }
}
