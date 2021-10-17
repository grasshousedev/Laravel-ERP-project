<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Expiracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo_expiracion', function (Blueprint $table) {
            $table->id();
            $table->string('expiracion');
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
        Schema::dropIfExists('tiempo_expiracion');
    }
}
