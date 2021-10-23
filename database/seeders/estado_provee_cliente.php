<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_provee_cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_provee_clientes')->insert([
            'estado'   => 'Activo'
        ]);

        DB::table('estado_provee_clientes')->insert([
            'estado'   => 'Potencial'
        ]);

        DB::table('estado_provee_clientes')->insert([
            'estado'   => 'Neutro'
        ]);

        DB::table('estado_provee_clientes')->insert([
            'estado'   => 'Descartado'
        ]);
    }
}
