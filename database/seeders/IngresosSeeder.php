<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngresosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacen_ingresos')->insert([
            'codigo'   => 'ALM001',
            'nombre'   => 'Impresora 3000',
            'fabricante'   => 'Pinzheng',
            'modelo'   => 'Chiron',
            'categoria'   => 'Producto',
            'precio_costo'   => 3500,
            'lote'   => 'lote1',
            'unidad_medida'   => 'mm',
            'unidades'   => 200,
            'descripcion'   => 'Fugiat incididunt si dolor lorem',
            'ruc_provee'   => '0100267442001',
            'razon_social'   => 'RODRIGUEZ RODAS CARMITA ALICIA',
            'guia'   => 'guia1',
            'almacen'   => 'ALMACEN1',
            'oc_proveedor'   => 'OC0001',
            'orden_pedido'   => 'OP0001',
            'moneda'   => 'Soles (S/.)',
            'serial'   => '3427349812',
            'fecha_ingreso'   => '2022-11-19',
            'hora_ingreso'   => '10:38:00',
        ]);

        DB::table('almacen_ingresos')->insert([
            'codigo'   => 'ALM002',
            'nombre'   => 'Impresora 4000',
            'fabricante'   => 'Twotrees',
            'modelo'   => 'ET4',
            'categoria'   => 'Producto',
            'precio_costo'   => 3800,
            'lote'   => 'lote1',
            'unidad_medida'   => 'm',
            'unidades'   => 300,
            'descripcion'   => 'Fugiat incididunt si dolor lorem',
            'ruc_provee'   => '0100329770001',
            'razon_social'   => 'MARIN ARIAS LUIS AUGUSTO',
            'guia'   => 'guia1',
            'almacen'   => 'ALMACEN1',
            'oc_proveedor'   => 'OC0002',
            'orden_pedido'   => 'OP0002',
            'moneda'   => 'Soles (S/.)',
            'serial'   => '3428769812',
            'fecha_ingreso'   => '2021-08-19',
            'hora_ingreso'   => '04:10:00',
        ]);

        DB::table('almacen_ingresos')->insert([
            'codigo'   => 'ALM003',
            'nombre'   => 'Impresora 5000',
            'fabricante'   => 'Wiiboox',
            'modelo'   => 'Saphire Plus V1.1',
            'categoria'   => 'Producto',
            'precio_costo'   => 6000,
            'lote'   => 'lote2',
            'unidad_medida'   => 'cm',
            'unidades'   => 150,
            'descripcion'   => 'Fugiat incididunt si dolor lorem',
            'ruc_provee'   => '0100409994001',
            'razon_social'   => 'JARA ORELLANA ROSA CLEMENTINA',
            'guia'   => 'guia1',
            'almacen'   => 'ALMACEN1',
            'oc_proveedor'   => 'OC0003',
            'orden_pedido'   => 'OP0003',
            'moneda'   => 'Soles (S/.)',
            'serial'   => '3427347612',
            'fecha_ingreso'   => '2021-08-11',
            'hora_ingreso'   => '07:34:00',
        ]);
    }
}
