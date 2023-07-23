<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataIspuController;
use App\Http\Controllers\LatihDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('', BerandaController::class)->name('beranda');

    Route::get('data-ispu', [DataIspuController::class, 'index'])->name('data-ispu.index');
    Route::get('data-ispu/tambah-data', [DataIspuController::class, 'create'])->name('data-ispu.create');
    Route::post('data-ispu', [DataIspuController::class, 'store'])->name('data-ispu.store');
    Route::get('data-ispu/{dataIspu:tanggal}/edit-data', [DataIspuController::class, 'edit'])->name('data-ispu.edit');
    Route::put('data-ispu/{id}', [DataIspuController::class, 'update'])->name('data-ispu.update');
    Route::delete('data-ispu/{id}', [DataIspuController::class, 'destroy'])->name('data-ispu.destroy');

    Route::get('latih-data', [LatihDataController::class, 'index'])->name('latih-data.index');
    Route::post('latih-data', [LatihDataController::class, 'store'])->name('latih-data.store');
    Route::get('latih-data/download', [LatihDataController::class, 'download'])->name('latih-data.download');

    Route::get('perhitungan', PerhitunganController::class)->name('perhitungan.index');

    Route::post('logout', [LoginController::class, 'logout'])->name('login.logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');
});
