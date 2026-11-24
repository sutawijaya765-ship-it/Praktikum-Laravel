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
    return view('profil');
});

Route::get('/controller', [BelajarController::class, 'index']);

Route::prefix('daftar/mahasiswa')
    ->name('mahasiswa.')
    ->controller(MahasiswaController::class)
    ->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{mahasiswa}/edit', 'edit')->name('edit');
        Route::get('/{mahasiswa}', 'show')->name('show');
        Route::put('/{mahasiswa}', 'update')->name('update');
        Route::delete('/{mahasiswa}', 'destroy')->name('destroy');

    });

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);