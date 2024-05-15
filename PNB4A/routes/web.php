<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllers;
use App\Http\Controllers\RuanganController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', [ProductControllers::class, 'index'])->name('product.index');
Route::get('product', [KontakControllers::class, 'index'])->name('kontak.index');
Route::get('dataruangan', [RuanganController::class, 'dataruangan']);