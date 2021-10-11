<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('admin.home');

Route::resource('users', UserController::class)->middleware('can:Ver listado de usuarios')->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');