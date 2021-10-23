<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class area_provee_clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_provee_clientes')->insert([
            'area'   => 'Seleccionar...'
        ]);

        DB::table('area_provee_clientes')->insert([
            'area'   => 'GERENCIA'
        ]);

        DB::table('area_provee_clientes')->insert([
            'area'   => 'LOGISTICA'
        ]);
        DB::table('area_provee_clientes')->insert([
            'area'   => 'ALMACEN'
        ]);
        DB::table('area_provee_clientes')->insert([
            'area'   => 'SISTEMAS'
        ]);

        DB::table('area_provee_clientes')->insert([
            'area'   => 'VENTAS'
        ]);
        DB::table('area_provee_clientes')->insert([
            'area'   => 'OPERACIONES'
        ]);
        DB::table('area_provee_clientes')->insert([
            'area'   => 'PLANEAMIENTO'
        ]);
    }
}
