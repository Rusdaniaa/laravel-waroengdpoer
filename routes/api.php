<?php

use App\Http\Controllers\Api\ApiTransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Middleware\AuthCheck;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('barang',[BarangController::class, 'api_getBarang']);

Route::group(['prefix'=>'auth',],function(){
    Route::post('login',[AuthController::class,'login']);
    Route::post('register',[AuthController::class,'register']);
});

Route::group(['prefix'=>'transaksi','middleware'=>AuthCheck::class],function(){
    Route::get('/',[ApiTransaksiController::class,'index']);
    Route::post('insert',[ApiTransaksiController::class,'insert']);
    Route::post('order/qty/{id}',[ApiTransaksiController::class, 'tambah_qty']);
    Route::get('order',[ApiTransaksiController::class,'order_menu']);
    Route::get('order/delete/{id}',[ApiTransaksiController::class,'hapus_pesanan']);
});
