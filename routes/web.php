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


Route::get('/layout', [LaporanController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/dashboard', [dashboardController::class, 'index'])->name('search');

Route::get('/meja', [MejaController::class, 'index'])->name('meja.index');
Route::match(['get', 'post', 'put'], 'meja/update/{id}', [MejaController::class, 'update'])->name('meja.update');
Route::get('/meja/tambahdata', [MejaController::class, 'tambahdata']);
Route::post('/meja/store', [MejaController::class, 'store']);
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('search');
Route::get('/barang', [BarangController::class, 'index'])->name('search');
//Route::get('/search', [BarangController::class, 'search'])->name('search');
Route::get('/create', [BarangController::class, 'create']);
Route::post('/store', [BarangController::class, 'store']);
Route::get('/tampilkandata/{id}', [BarangController::class, 'tampilkandata'])->name('tampilkandata');
//Route::post('/updatedata/{id}', [BarangController::class, 'updatedata'])->name('updatedata');
Route::match(['get', 'post'], '/updatedata/{id}', [BarangController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [BarangController::class, 'deletedata'])->name('deletedata');
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/pembayaran', [TransaksiController::class, 'index']);
Route::post('/pembayaran/store', [TransaksiController::class, 'store']);
Route::get('/pembayaran/detail', [TransaksiController::class, 'detailbayar']);
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::get('/detailbayar', [TransaksiController::class, 'detailbayar']);
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout.logout');
