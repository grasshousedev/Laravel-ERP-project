<?php

namespace App\Classes;

use App\Models\Almacen_ingreso;
use App\Models\Salida;

class ActualizarStock
{
    public function revisar_tablas()
    {
        $ingresos = Almacen_ingreso::all();
        
        foreach ($ingresos as $id){
            $salidas = Salida::where('id_ingreso', '=', $id->id_ingreso);
            if(isset($registro)){
                $salidas->cantidad = $ingresos->cantidad - $salidas->cantidad;
            }
        }
    }
}