<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\Barang;
use App\Models\TransaksiDetail;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = transaksi::all();

        return view('pembayaran.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $barangs = Barang::pluck('nama_barang', 'id');
        return view('pembayaran.pos', compact('barangs'));
    // Show the form for creating a new transaction

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data transaksi
        $transaksi = new Transaksi;
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->bayar = $request->bayar;
        $transaksi->kembalian = $request->kembalian;
        $transaksi->save();



        // Simpan data detail transaksi
        $detailTransaksi = new TransaksiDetail;
        $detailTransaksi->transaksi_id = $transaksi->id;
        $detailTransaksi->kode_barang = $request->id;
        $detailTransaksi->nama_barang = $request->nama_barang;
        $detailTransaksi->harga = $request->harga;
        $detailTransaksi->quantity = $request->quantity;
        $detailTransaksi->subtotal = $request->subtotal;
        $detailTransaksi->save();

        // Store other fields in the database as needed

        // Redirect or return a response
        return redirect()->route('pembayaran.index')->with('success', 'Transaction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
