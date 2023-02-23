<?php

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

Route::get('/', function () {
    return view('layout.beranda');
});

Route::get('/data-ispu', function () {
    return view('layout.dataispu');
});

Route::get('/latih-data', function () {
    return view('layout.latihdata');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/registrasi', function () {
    return view('auth.registrasi');
});

Route::get('/data-ispu/tambah-data', function () {
    return view('layout.dataispu-add');
});
