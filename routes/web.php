<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
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
Route::get('/', LoginController::class);

Route::post('/',[LoginController::class,'validar'])->name('Login.validar');

Route::get('menu', [MenuController::class,'index'])->name('menu.index'); 

Route::post('menu', MenuController::class,'ingresar')->name('menu.index');

Route::get('menu/formulario', [MenuController::class,'create'])->name('menu.formulario');

//Route::post('menu/formulario', [MenuController::class,'store'])->name('menu.store'); 

Route::get('menu/mail', [MenuController::class,'show'])->name('menu.mail'); 

