<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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
Route::get('/', homeController::class);

Route::get('main', function () {
    //return view('welcome');
    return "Bienvenido a la página principal";
});

Route::get('login', function () {
       return "Ud se encuentra en el login principal";
});

