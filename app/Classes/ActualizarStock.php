<?php

namespace App\Classes;

use App\Models\Almacen_ingreso;
use App\Models\Stock;

class ActualizarStock
{
    public function revisar_tablas()
    {
        $ingresos = Stock::all();
        
        foreach ($ingresos as $id){
            $registro = Salida::where('id_ingreso', '=', $id->id_ingreso);
            isset($registro){
                $registro->cantidad = $registro->cantidad - $cantidad;
                $registro->save();
            }
        }
    }
    public function actualizar_de_registro($id, $cantidad)
    {
        $registro = Stock::where('id_ingreso', '=', $id);
        $registro->cantidad = $registro->cantidad - $cantidad;
        $registro->save();
    }
}