<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GearController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'store'])->name('home.store');

Route::get('/gear', [GearController::class, 'index'])->name('gear.index');
