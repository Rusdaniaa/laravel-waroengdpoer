<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login.login');
})->name('login.login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('layouts.main');
})->name('laporan.index');
Route::get('/laporan', function () {
    return view('laporan.index');
})->name('laporan.index');
Route::get('/barang', function () {
    return view('barang.index');
})->name('barang.index');