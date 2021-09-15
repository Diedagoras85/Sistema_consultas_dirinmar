<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\RequerimientoController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\UsuariodeptosController;
use App\Http\Controllers\Admin\AlertaController;
use App\Http\Controllers\Admin\ReporteController;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index', 'create', 'edit', 'update'])->names('users');

Route::resource('requerimientos', RequerimientoController::class)->names('requerimientos');

Route::resource('clientes', ClienteController::class)->names('clientes');

Route::resource('emails', EmailController::class)->names('emails');

Route::resource('usuariodeptos', UsuariodeptosController::class)->names('usuariodeptos');

Route::resource('alertas', AlertaController::class)->only(['index', 'store'])->names('alertas');

Route::resource('reportes', ReporteController::class)->names('reportes');

