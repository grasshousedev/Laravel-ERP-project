<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TiempoEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo_entrega', function (Blueprint $table) {
            $table->id();
            $table->string('entrega');
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
        Schema::dropIfExists('tiempo_entrega');
    }
}
