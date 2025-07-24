<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JettyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OpenYardController;

Route::redirect('/', '/jetty')->name('home');

Route::get('/jetty', [JettyController::class, 'index'])->name('jetty.index');
Route::post('/jetty', [JettyController::class, 'store'])->name('jetty.store');

Route::get('/open-yard', [OpenYardController::class, 'index'])->name('open-yard.index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
