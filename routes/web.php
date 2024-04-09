<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\WarehouseController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', [WarehouseController::class, 'dashboard'])->name('dashboard');

    Route::get('admin/order', [WarehouseController::class, 'order'])->name('order');

    Route::get('admin/inventory', [WarehouseController::class, 'inventory'])->name('inventory');

    Route::get('admin/inbound', [WarehouseController::class, 'inbound'])->name('inbound');

    Route::get('admin/outbound', [WarehouseController::class, 'outbound'])->name('outbound');

    Route::get('admin/invoice', [WarehouseController::class, 'invoice'])->name('invoice');

    Route::get('admin/report', [WarehouseController::class, 'report'])->name('report');

