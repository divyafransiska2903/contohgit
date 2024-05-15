<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource("/ruangan", RuanganController::class);
Route::resource("/perbaikan", PerbaikanController::class);
Route::resource("/mahasiswa", MahasiswaController::class);
Route::resource("/student", StudentController::class);
Route::resource("/customer", StudentController::class);
