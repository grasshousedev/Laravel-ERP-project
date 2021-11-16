<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductosOcproveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_occps', function (Blueprint $table) {
            $table->id();
            
            $table->string('producto');
            $table->string('notas');
            $table->double('cantidad_prod');
            $table->double('precio_prod');
            $table->double('total_prod');

            $table->unsignedBigInteger('oc_proveedor_id')->nullable();
            
            $table->foreign('oc_proveedor_id')
                    ->references('id')
                    ->on('ocproveedores')
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
        Schema::dropIfExists('productos_occps');
    }
}
