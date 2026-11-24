<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/belajar', function () {
    return view('belajar');
});

Route::get('/profil', function () {
    return 'Nama saya Suta Wijaya, saya sedang belajar Laravel 12!';
});

Route::get('/controller', [BelajarController::class, 'index']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);