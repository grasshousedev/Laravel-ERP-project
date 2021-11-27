<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_entregas')->insert([
            'estado'   => 'Abierto'
        ]);

        DB::table('estado_entregas')->insert([
            'estado'   => 'Aprobado'
        ]);

        DB::table('estado_entregas')->insert([
            'estado'   => 'Pendiente'
        ]);

        DB::table('estado_entregas')->insert([
            'estado'   => 'Proceso'
        ]);

        DB::table('estado_entregas')->insert([
            'estado'   => 'Cerrado'
        ]);
    }
}
