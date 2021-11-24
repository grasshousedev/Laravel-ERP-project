<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            'modelo'   => 'Seleccionar...'
        ]);

        DB::table('modelos')->insert([
            'modelo'   => 'ET4'
        ]);

        DB::table('modelos')->insert([
            'modelo'   => 'Saphire Plus V1.1'
        ]);

        DB::table('modelos')->insert([
            'modelo'   => 'Chiron'
        ]);
    }
}
