<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_occProveedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadoproveedors')->insert([
            'estado'   => 'Seleccionar...'
        ]);

        DB::table('estadoproveedors')->insert([
            'estado'   => 'Abierto'
        ]);

        DB::table('estadoproveedors')->insert([
            'estado'   => 'OC Enviada'
        ]);

        DB::table('estadoproveedors')->insert([
            'estado'   => 'En proceso'
        ]);

        DB::table('estadoproveedors')->insert([
            'estado'   => 'Pedido recibido'
        ]);

        DB::table('estadoproveedors')->insert([
            'estado'   => 'Cerrado'
        ]);
        

    }
}
