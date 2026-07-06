<?php

use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('producto',ProductoController::class);

Route::resource('inventario',InventarioController::class);

Route::resource('venta',VentaController::class);

Route::get('', [ProductoController::class, 'principal'])
    ->name('producto.principal');