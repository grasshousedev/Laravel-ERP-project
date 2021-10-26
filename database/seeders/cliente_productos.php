<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente_productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente_productos')->insert([
            'producto'          => 'PRUEBA',
            'cantidad_prod'     => '4',
            'precio_prod'       => '250',
            'total_prod'        => '1000',
            'sub_total'         => '1000',
            'igv_sub'           => '180',
            'total_neto'        => '1180',
        ]);

    }
}
