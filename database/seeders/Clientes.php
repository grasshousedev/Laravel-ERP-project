<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'ruc'           => '1234567890',
            'razon_social'  => 'Gerardo Franco',
            'direccion'     => 'Comas-Belaunde Este Cuadra 12',
            'contacto'      => 'Gerardo Franco',
            'celular1'      => '956321478',
            'celular2'      => '',
            'email1'        => 'gerardofranco@gmail.com',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'Ventas',
            'estado'        => 'Activo',
            'asignado'      => 'Diego'
        ]);

        DB::table('clientes')->insert([
            'ruc'           => '1234567891',
            'razon_social'  => 'Jamir Vargas',
            'direccion'     => '............',
            'contacto'      => 'Jamir Vargas',
            'celular1'      => '958741236',
            'celular2'      => '9865238741',
            'email1'        => 'jamir@gmail.com',
            'email2'        => '',
            'paginaweb'     => 'www.jamir.com',
            'area'          => 'Ventas',
            'estado'        => 'Activo',
            'asignado'      => 'Gerardo Franco'
        ]);

        DB::table('clientes')->insert([
            'ruc'           => '1234567892',
            'razon_social'  => 'Diego Peña',
            'direccion'     => '................',
            'contacto'      => 'Diego Peña',
            'celular1'      => '956341478',
            'celular2'      => '',
            'email1'        => 'diego@gmail.com',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'Ventas',
            'estado'        => 'Activo',
            'asignado'      => 'Diego'
        ]);

        DB::table('clientes')->insert([
            'ruc'           => '1234567893',
            'razon_social'  => 'Lorena Caro',
            'direccion'     => '................',
            'contacto'      => 'Lorena Caro',
            'celular1'      => '956321488',
            'celular2'      => '',
            'email1'        => 'lorena@gmail.com',
            'email2'        => '',
            'paginaweb'     => '',
            'area'          => 'Ventas',
            'estado'        => 'Activo',
            'asignado'      => 'Jamir'
        ]);

    }
}
