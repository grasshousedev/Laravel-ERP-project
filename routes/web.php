<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Cotizacione;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Orden_pedido;
use App\Models\Ordenes_compra;
use App\Models\Cliente_producto;


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    $cotizaciones_aprobadas = count(Ordenes_compra::all());
    $cotizaciones_aprobadas = isset($cotizaciones_aprobadas) ? $cotizaciones_aprobadas : 0;
    
    $num_productos = count(Producto::all());
    $num_productos = isset($num_productos) ? $num_productos : 0;
    
    $num_op = count(Orden_pedido::all());
    $num_op = isset($num_op) ? $num_op : 0;

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

})->name('admin');

Route::get('admin/ventas/pdf', [App\Http\Controllers\Admin\VentaController::class, 'pdf'])->name('admin.ventas.pdf');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('admin/ventas/pdf', [App\Http\Controllers\Admin\VentaController::class, 'pdf'])->name('admin.ventas.pdf');

Route::get('admin/ventas/findCustomers', [App\Http\Controllers\Admin\VentaController::class, 'search'])->name('admin.ventas.search');

Route::get('admin/ventas/findCustomersProduct', [App\Http\Controllers\Admin\VentaController::class, 'searchProduct'])->name('admin.ventas.searchProduct');

Route::get('admin/occProveedores/findCustomers', [App\Http\Controllers\Admin\OccProveedoresController::class, 'search'])->name('admin.occProveedores.search');

Route::get('admin/occProveedores/findCustomersProduct', [App\Http\Controllers\Admin\OccProveedoresController::class, 'searchProduct'])->name('admin.occProveedores.searchProduct');

Route::get('admin/listaproductos/findCustomersProduct', [App\Http\Controllers\Admin\Lista_ProductosController::class, 'searchProduct'])->name('admin.listaproductos.searchProduct');