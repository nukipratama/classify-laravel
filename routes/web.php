<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JettyController;
use App\Http\Controllers\GearController;
use App\Http\Controllers\OpenYardController;

Route::get('/', [JettyController::class, 'index'])->name('jetty');
Route::post('/', [JettyController::class, 'store'])->name('jetty.store');

Route::get('/gear', [GearController::class, 'index'])->name('gear.index');

Route::get('/open-yard', [OpenYardController::class, 'index'])->name('open-yard.index');
