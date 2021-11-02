<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoProducto_servicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_productoservicios')->insert([
            'producto_servicio'   => 'Seleccionar...'
        ]);

        DB::table('estado_productoservicios')->insert([
            'producto_servicio'   => 'Producto'
        ]);

        DB::table('estado_productoservicios')->insert([
            'producto_servicio'   => 'Servicio'
        ]);

    }
}
