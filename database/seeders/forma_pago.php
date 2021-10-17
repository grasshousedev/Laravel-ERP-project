<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class forma_pago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pago')->insert([
            'tipo_pago'   => 'Efectivo'
        ]);

        DB::table('forma_pago')->insert([
            'tipo_pago'   => '10 Dias'
        ]);

        DB::table('forma_pago')->insert([
            'tipo_pago'   => '15 Dias'
        ]);

        DB::table('forma_pago')->insert([
            'tipo_pago'   => '20 Dias'
        ]);

        DB::table('forma_pago')->insert([
            'tipo_pago'   => '30 Dias'
        ]);
    }
}
