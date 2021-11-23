<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlmaceneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacenes')->insert([
            'almacen'   => 'Seleccionar...'
        ]);

        DB::table('almacenes')->insert([
            'almacen'   => 'ALMACEN1'
        ]);

        DB::table('almacenes')->insert([
            'almacen'   => 'ALMACEN2'
        ]);

        DB::table('almacenes')->insert([
            'almacen'   => 'ALMACEN3'
        ]);
    }
}
