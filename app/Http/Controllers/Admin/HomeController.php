<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cotizacione;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Orden_pedido;
use App\Models\Ordenes_compra;
use App\Models\Cliente_producto;


class HomeController extends Controller
{
    public function index(){

        // $cotizaciones_aprobadas = 0;
        $cotizaciones_aprobadas = count(Ordenes_compra::all());
        $cotizaciones_aprobadas = (isset($cotizaciones_aprobadas)) ? $cotizaciones_aprobadas : 0;
        
        // $num_productos = 0;
        $num_productos = count(Producto::all());
        $num_productos = (isset($num_productos)) ? $num_productos : 0;
        
        // $num_op = 0;
        $num_op = count(Orden_pedido::all());
        $num_op = (isset($num_op)) ? $num_op : 0;

        // TOTALES
        $venta = Cliente_producto::all();
        $total_ventas = 0;
        foreach ($venta as $item) {
            $total_ventas += $item->total_prod;
        }

        $producto = Producto::all();
        $total_productos = 0;
        foreach ($producto as $item) {
            $total_productos += $item->prec_prod;
        }        
        
        return view('admin.index', compact('cotizaciones_aprobadas', 'num_productos', 'num_op', 'total_ventas', 'total_productos'));
        // return view('admin.index');
    }
}
