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

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('layouts.main');
})->name('laporan.index');
Route::get('/laporan', function () {
    return view('laporan.index');
})->name('laporan.index');