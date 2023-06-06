<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\tambahController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
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



Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/meja', [MejaController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/tambahbarang', [tambahController::class, 'toTambah']);
Route::post('/tambahbarang/save', [tambahController::class, 'saveData']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/pembayaran', [TransaksiController::class, 'index']);

//Route::get('/logout', 'Auth\LoginController@logout')->name('logout.logout');
