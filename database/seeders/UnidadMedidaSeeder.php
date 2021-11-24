<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades_medidas')->insert([
            'unidad'   => 'Seleccionar...'
        ]);

        DB::table('unidades_medidas')->insert([
            'unidad'   => 'mm'
        ]);

        DB::table('unidades_medidas')->insert([
            'unidad'   => 'cm'
        ]);

        DB::table('unidades_medidas')->insert([
            'unidad'   => 'm'
        ]);
    }
}
