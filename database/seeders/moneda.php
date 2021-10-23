<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class moneda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_monedas')->insert([
            'moneda'   => 'Seleccionar...'
        ]);


        DB::table('tipo_monedas')->insert([
            'moneda'   => 'Soles (S/.)'
        ]);

        DB::table('tipo_monedas')->insert([
            'moneda'   => 'Dolares ($)'
        ]);

        DB::table('tipo_monedas')->insert([
            'moneda'   => 'Euros (€)'
        ]);
    }
}
