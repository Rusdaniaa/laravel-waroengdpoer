<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tambahController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BarangController;
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
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/jumlahpelanggan', [dashboardController::class, 'pelanggan'])->name('jumlahPelanggan');
Route::get('/dashboard/jumlahorder', [dashboardController::class, 'pendapatan'])->name('jumlahpendapatan');
Route::get('/dashboard/jumlahpendapatan', [dashboardController::class, 'order'])->name('jumlahorder');
Route::get('/meja', [MejaController::class, 'index'])->name('meja.index');
Route::match(['get', 'post', 'put'], 'meja/update/{id}', [MejaController::class, 'update'])->name('meja.update');
Route::get('/meja/tambahdata', [MejaController::class, 'tambahdata']);
Route::post('/meja/store', [MejaController::class, 'store']);
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('search');
Route::get('/menu', [BarangController::class, 'index'])->name('data_menu');
Route::get('menu/create', [BarangController::class, 'create'])->name('menu_tambah_page');
Route::get('menu/delete/{id}', [BarangController::class, 'deletedata'])->name('menu_delete');
Route::post('menu/store', [BarangController::class, 'store'])->name('simpan_menu');
Route::get('/tampilkandata/{id}', [BarangController::class, 'tampilkandata'])->name('tampilkandata');
Route::match(['get', 'post'], '/updatedata/{id}', [BarangController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [BarangController::class, 'deletedata'])->name('deletedata');
Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/pembayaran', [TransaksiController::class, 'index']);
Route::get('/pembayaran/pos', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/pembayaran/store', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/pembayaran/detail', [TransaksiController::class, 'detailbayar']);

//Route::get('/detailbayar', [TransaksiController::class, 'detailbayar']);
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout.logout');
