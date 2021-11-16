<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Proveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'ruc'           => '20602868495',
            'razon_social'  => 'DIGITALZ PERU S.A.C.',
            'direccion'     => 'Calle Manuel Gonzales Olaechea 419, San Isidro',
            'contacto'      => 'DIGITALZ',
            'celular1'      => '949522202',
            'celular2'      => '935682092',
            'email1'        => 'info@digitalz.pe',
            'email2'        => '',
            'paginaweb'     => 'www.digitalz3d.com'
        ]);

        DB::table('proveedores')->insert([
            'ruc'           => '20556316890',
            'razon_social'  => 'FABRICACIONES DIGITALES DEL PERU S.A',
            'direccion'     => 'Calle Los Arboles 249, Urb. Santa Lucia, Ate',
            'contacto'      => 'KREAR 3D',
            'celular1'      => '(01) 2955450',
            'celular2'      => '982001288',
            'email1'        => 'ventas@krear3d.com',
            'email2'        => '',
            'paginaweb'     => 'www.krear3d.com'
        ]);

        DB::table('proveedores')->insert([
            'ruc'           => '20602927114',
            'razon_social'  => 'ADITIVA 3D S.A.C.',
            'direccion'     => 'Av. Arenales 1737, Lince',
            'contacto'      => 'ADITIVA 3D',
            'celular1'      => '943217400',
            'celular2'      => '',
            'email1'        => 'info@aditiva3d.com',
            'email2'        => '',
            'paginaweb'     => 'www.aditiva3d.com'
        ]);

        DB::table('proveedores')->insert([
            'ruc'           => '20556994537',
            'razon_social'  => 'CORPORACION CREAR 4D SOCIEDAD ANONIMA CERRADA',
            'direccion'     => 'Av. República de Panamá 4474, Surquillo 15047',
            'contacto'      => 'CREAR 4D',
            'celular1'      => '994077091',
            'celular2'      => '',
            'email1'        => 'ventas@crear4d.com',
            'email2'        => '',
            'paginaweb'     => 'www.crear4d.com'
        ]);

        DB::table('proveedores')->insert([
            'ruc'           => '0601916674',
            'razon_social'  => 'CORPORACION 3D CAD PERU E.I.R.L.',
            'direccion'     => 'Jirón los Mogaburos 215, Jesús María 15072',
            'contacto'      => '3D CAD PERU',
            'celular1'      => '910184514',
            'celular2'      => '931508310',
            'email1'        => '3dcadperu@gmail.com',
            'email2'        => '',
            'paginaweb'     => ' www.3dcadperu.com'
        ]);

    }
}
