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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('admin.index');
})->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('admin/ventas/pdf', [App\Http\Controllers\Admin\VentaController::class, 'pdf'])->name('admin.ventas.pdf');

Route::get('admin/ventas/findCustomers', [App\Http\Controllers\Admin\VentaController::class, 'search'])->name('admin.ventas.search');

Route::get('admin/ventas/findCustomersProduct', [App\Http\Controllers\Admin\VentaController::class, 'searchProduct'])->name('admin.ventas.searchProduct');

Route::get('admin/occProveedores/findCustomers', [App\Http\Controllers\Admin\OccProveedoresController::class, 'search'])->name('admin.occProveedores.search');

Route::get('admin/occProveedores/findCustomersProduct', [App\Http\Controllers\Admin\OccProveedoresController::class, 'searchProduct'])->name('admin.occProveedores.searchProduct');

