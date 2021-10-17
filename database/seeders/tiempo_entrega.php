<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tiempo_entrega extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiempo_entrega')->insert([
            'entrega'   => '10 Dias'
        ]);

        DB::table('tiempo_entrega')->insert([
            'entrega'   => '15 Dias'
        ]);

        DB::table('tiempo_entrega')->insert([
            'entrega'   => '20 Dias'
        ]);
    }
}
