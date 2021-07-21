<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClienteController;


Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index', 'create', 'edit', 'update'])->names('users');

Route::resource('requerimiento', RequerimientoController::class)->names('requerimiento');

Route::resource('clientes', ClienteController::class)->names('clientes');

