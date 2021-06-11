<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Requerimiento;

Route::redirect('','requerimiento');

Route::get('', Requerimiento::class)->name('index');