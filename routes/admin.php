<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\LogisticaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ServicioController;
// use App\Http\Controllers\Admin\ProveedorController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('admin.home');

Route::resource('users', UserController::class)->middleware('can:Ver listado de usuarios')->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('almacen', AlmacenController::class)->names('admin.almacen');

Route::resource('logistica', LogisticaController::class)->names('admin.logistica');

Route::resource('productos', ProductoController::class)->names('admin.productos');

Route::resource('servicios', ServicioController::class)->names('admin.servicios');

// Route::resource('proveedor', ProveedorController::class)->names('admin.Proveedor');