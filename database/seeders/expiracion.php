<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class expiracion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiempo_expiraciones')->insert([
            'expiracion'   => '10 Dias'
        ]);

        DB::table('tiempo_expiraciones')->insert([
            'expiracion'   => '15 Dias'
        ]);

        DB::table('tiempo_expiraciones')->insert([
            'expiracion'   => '20 Dias'
        ]);
    }
}
