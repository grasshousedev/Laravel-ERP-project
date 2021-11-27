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

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'] )->middleware(['auth:sanctum', 'verified'])->name('admin.index');
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'] )->middleware(['auth:sanctum', 'verified'])->name('admin.index');

Route::get('admin/ventas/pdf', [App\Http\Controllers\Admin\VentaController::class, 'pdf'])->name('admin.ventas.pdf');

Route::get('admin/ventas/findCustomers', [App\Http\Controllers\Admin\VentaController::class, 'search'])->name('admin.ventas.search');

Route::get('admin/ventas/findCustomersProduct', [App\Http\Controllers\Admin\VentaController::class, 'searchProduct'])->name('admin.ventas.searchProduct');

Route::get('admin/occProveedores/findCustomers', [App\Http\Controllers\Admin\OccProveedoresController::class, 'search'])->name('admin.occProveedores.search');

Route::get('admin/occProveedores/findCustomersProduct', [App\Http\Controllers\Admin\OccProveedoresController::class, 'searchProduct'])->name('admin.occProveedores.searchProduct');

Route::get('admin/listaproductos/findCustomersProduct', [App\Http\Controllers\Admin\Lista_ProductosController::class, 'searchProduct'])->name('admin.listaproductos.searchProduct');

Route::get('admin/rutaSalidas/findCustomers', [App\Http\Controllers\Admin\SalidaController::class, 'search'])->name('admin.rutaSalidas.search');
Route::get('admin/rutaSalidas/findCustomersCliente', [App\Http\Controllers\Admin\SalidaController::class, 'searchCliente'])->name('admin.rutaSalidas.searchCliente');

Route::get('admin/ingresosAlmacen/findCustomers', [App\Http\Controllers\Admin\IngresosAlmacenController::class, 'searchProveedor'])->name('admin.ingresosAlmacen.searchProveedor');

Route::get('admin/productos/searchProveedor', [App\Http\Controllers\Admin\ProductoController::class, 'searchProveedor'])->name('admin.productos.searchProveedor');

Route::get('admin/occClientes/searchClientes', [App\Http\Controllers\Admin\OccClientes::class, 'searchClientes'])->name('admin.occClientes.searchClientes');
