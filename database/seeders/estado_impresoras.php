<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_impresoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_impresoras')->insert([
            'estado_impresora'   => 'Seleccionar...'
        ]);

        DB::table('estado_impresoras')->insert([
            'estado_impresora'   => 'Activo'
        ]);

        DB::table('estado_impresoras')->insert([
            'estado_impresora'   => 'Inactivo'
        ]);

    }
}
