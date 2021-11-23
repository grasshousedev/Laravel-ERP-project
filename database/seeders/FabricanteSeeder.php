<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fabricantes')->insert([
            'fabricante'   => 'Seleccionar...'
        ]);

        DB::table('fabricantes')->insert([
            'fabricante'   => 'Pinzheng'
        ]);

        DB::table('fabricantes')->insert([
            'fabricante'   => 'Twotrees'
        ]);

        DB::table('fabricantes')->insert([
            'fabricante'   => 'Wiiboox'
        ]);
    }
}
