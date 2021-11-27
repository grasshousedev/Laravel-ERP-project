<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'cod_prod'      => 'SLA0001',
            'nombre'      => 'Impresora Pinzheng',
            'fabri_prod'    => 'Pinzheng',
            'model_prod'    => 'Dazzle L120 Basic',
            'tipo_prod'     => 'SLA',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 4058,
            'vent_prod'     => 4670,
            'unidades_prod' => 11,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '20602868495',
            'razon_social'     => 'DIGITALZ PERU S.A.C.',
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'SLA0002',
            'nombre'      => 'Impresora Pinzheng SL',
            'fabri_prod'    => 'Pinzheng',
            'model_prod'    => 'Dazzle S130',
            'tipo_prod'     => 'SLA',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 4951,
            'vent_prod'     => 5695,
            'unidades_prod' => 10,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '20556316890',
            'razon_social'     => 'FABRICACIONES DIGITALES DEL PERU S.A',
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0001',
            'nombre'      => 'Impresora Twotrees',
            'fabri_prod'    => 'Twotrees',
            'model_prod'    => 'Saphire Plus V1.1',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 2550,
            'vent_prod'     => 2950,
            'unidades_prod' => 15,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '20602927114',
            'razon_social'     => 'ADITIVA 3D S.A.C.',
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0002',
            'nombre'      => 'Impresora Anel',
            'fabri_prod'    => 'Anet',
            'model_prod'    => 'ET4',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 802,
            'vent_prod'     => 950,
            'unidades_prod' => 30,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '20556994537',
            'razon_social'     => 'CORPORACION CREAR 4D SOCIEDAD ANONIMA CERRADA',
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0003',
            'fabri_prod'    => 'Creality',
            'nombre'    => 'Impresora Creality',
            'model_prod'    => 'Ender 3',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 940,
            'vent_prod'     => 1080,
            'unidades_prod' => 28,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0004',
            'fabri_prod'    => 'Artillery',
            'nombre'    => 'Impresora Artillery',
            'model_prod'    => 'Sidewinder X1',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 1950,
            'vent_prod'     => 2245,
            'unidades_prod' => 19,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0005',
            'fabri_prod'    => 'Anycubic',
            'nombre'    => 'Impresoa Anycubic',
            'model_prod'    => 'Chiron',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 1950,
            'vent_prod'     => 2245,
            'unidades_prod' => 20,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '20556994537',
            'razon_social'     => 'CORPORACION CREAR 4D SOCIEDAD ANONIMA CERRADA',
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'DLP0001',
            'fabri_prod'    => 'Pinzheng',
            'nombre'    => 'Impresora Pinzheng',
            'model_prod'    => 'Dazzle D100',
            'tipo_prod'     => 'DLP',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 48891,
            'vent_prod'     => 53780,
            'unidades_prod' => 5,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'SLA0003',
            'fabri_prod'    => 'Wiiboox',
            'nombre'    => 'Impresora Wiiboox',
            'model_prod'    => '3DSL450',
            'tipo_prod'     => 'SLA',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 191506,
            'vent_prod'     => 205000,
            'unidades_prod' => 1,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'SLA0004',
            'fabri_prod'    => 'Wiiboox',
            'nombre'    => 'Impresora Wiiboox',
            'model_prod'    => '3DSL460',
            'tipo_prod'     => 'SLA',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 203730,
            'vent_prod'     => 215000,
            'unidades_prod' => 5,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'SLA0005',
            'fabri_prod'    => 'Soonsolid',
            'nombre'    => 'Impresora Soonsolid',
            'model_prod'    => 'SP350HP',
            'tipo_prod'     => 'SLA',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 244476,
            'vent_prod'     => 267000,
            'unidades_prod' => 1,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'FDM0006',
            'fabri_prod'    => 'Allcct',
            'nombre'    => 'Impreso Allcct',
            'model_prod'    => 'Weike 6610',
            'tipo_prod'     => 'FDM',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 21391,
            'vent_prod'     => 24000,
            'unidades_prod' => 5,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);

        DB::table('productos')->insert([
            'cod_prod'      => 'DLP0002',
            'fabri_prod'    => 'Creality',
            'nombre'    => 'Impresora Creality',
            'model_prod'    => 'LD-002R',
            'tipo_prod'     => 'DLP',
            'descripcion'   => 'Prueba descripcion',
            'prec_prod'     => 895,
            'vent_prod'     => 1030,
            'unidades_prod' => 20,
            'estado'        => 'Activo',
            'tipo'          => 'Producto',
            'proveedor'     => '0601916674',
            'razon_social'     => 'CORPORACION 3D CAD PERU E.I.R.L.'
        ]);
    }
}
