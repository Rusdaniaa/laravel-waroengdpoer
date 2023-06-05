<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\tambahController;

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

Route::get('/layouts', function () {
    return view('layouts.main');
})->name('laporan.index');
Route::get('/laporan', function () {
    return view('laporan.index');
})->name('laporan.index');
Route::get('/barang', 'App\Http\Controllers\BarangController@index')
->name('barang.index');
Route::get('/tambahbarang', [tambahController::class, 'toTambah']);
Route::post('/tambahbarang/save', [tambahController::class, 'saveData']);
Route::get('/logout', 'App\Http\Controllers\LogoutController@index')->name('logout.logout');
Route::get('/layouts', 'App\Http\Controllers\layoutController@index')
->name('layouts.main');
Route::get('/pembayaran', 'App\Http\Controllers\TransaksiController@index')
->name('pembayaran.index');
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout.logout');


Route::get('/login', function () {
    return view('login.login');
})->name('login.login');

//Route::get('/logout', function () {
  //  return view('logout.logout');
//})->name('logout.logout');