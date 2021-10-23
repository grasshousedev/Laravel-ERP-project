<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_impresoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_impresoras')->insert([
            'tipo_impresora'   => 'Seleccionar...'
        ]);

        DB::table('tipo_impresoras')->insert([
            'tipo_impresora'   => 'SLA'
        ]);

        DB::table('tipo_impresoras')->insert([
            'tipo_impresora'   => 'FDM'
        ]);

        DB::table('tipo_impresoras')->insert([
            'tipo_impresora'   => 'DLP'
        ]);
    }
}
