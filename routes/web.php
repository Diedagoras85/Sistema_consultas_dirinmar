<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\IngresarController;
use App\Http\Controllers\ReportesController;

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

Route::get('/',function(){
    return view('auth.login');
});

Route::get('/welcome', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('ingresar', [HomeController::class, 'index'])->name('ingresar.index');

Route::post('guardar', [HomeController::class, 'store'])->name('ingresar.store');

Route::get('editar/{requerimiento}/edit',[HomeController::class, 'edit'])->name('ingresar.edit');

Route::post('enviar', [HomeController::class, 'update'])->name('ingresar.update');

Route::get('reportes', [ReportesController::class, 'index'])->name('reportes.index');

Route::get('imprimir', [ReportesController::class, 'create'])->name('reportes.create');
