<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lotes')->insert([
            'lote'   => 'lote1'
        ]);

        DB::table('lotes')->insert([
            'lote'   => 'lote2'
        ]);

        DB::table('lotes')->insert([
            'lote'   => 'lote3'
        ]);
    }
}
