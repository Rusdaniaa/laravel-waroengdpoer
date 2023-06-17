<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiTransaksiController extends Controller
{

    public function index() {
        $user = Auth::user();
        $transaksi = Transaksi::where('nama_pemesan','=',$user->name)->where('order','=','false')->first();
        $detail_transaksi = TransaksiDetail::where('transaksi_id','=',$transaksi->id)->get();
        return response()->json(['data'=>$detail_transaksi]);
    }
    public function insert(Request $request) {
        $user = Auth::user();
        $transaksi_check = Transaksi::where('nama_pemesan','=',$user->name)->where('order','=','false')->first();
        if(!$transaksi_check){
            $array_field = array(
                'tgl_transaksi'=>Carbon::now(),
                'nama_pemesan'=>$user->name,
                'bayar'=>0,
                'kembalian'=>0
            );
            $transaksi = Transaksi::create($array_field);
            $detail_field = array(
                'transaksi_id'=>$transaksi->id,
                'barang_id'=>$request->input('barang_id'),
                'nama_barang'=>$request->input('nama_barang'),
                'harga'=>$request->input('harga'),
                'quantity'=>$request->input('quantity'),
                'subtotal'=>$request->input('quantity') * $request->input('harga'),
            );
            TransaksiDetail::create($detail_field);
            return response()->json(['message'=>'data berhasil dimasukkan']);
        }else{
        $detail_field = array(
            'transaksi_id'=>$transaksi_check->id,
            'barang_id'=>$request->input('barang_id'),
            'nama_barang'=>$request->input('nama_barang'),
            'harga'=>$request->input('harga'),
            'quantity'=>$request->input('quantity'),
            'subtotal'=>$request->input('quantity') * $request->input('harga'),
        );
        TransaksiDetail::create($detail_field);
        return response()->json(['message'=>'data berhasil dimasukkan']);
        }
    }

    public function order_menu() {
        $user = Auth::user();
        $transaksi = Transaksi::where('nama_pemesan','=',$user->name)->where('order','=','false')->first();
        $transaksi->order = 'true';
        $transaksi->update();
        return response()->json(['message'=>'data berhasil diubah']);
    }

    public function hapus_pesanan($id) {
        $transaksiDetail = TransaksiDetail::find($id);
        $transaksiDetail->delete();
        return response()->json(['message'=>'data berhasil diubah']);
    }

    public function tambah_qty(Request $request,$id) {
        $transaksiDetail = TransaksiDetail::find($id);
        $transaksiDetail->quantity = $request->input('quantity');
        $transaksiDetail->subtotal = $request->input('quantity') * $request->input('harga');
        $transaksiDetail->update();
        return response()->json(['message'=>'data berhasil diubah']);
    }
}
