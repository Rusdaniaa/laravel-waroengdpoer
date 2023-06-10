<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\Barang;
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

    // Show the form for creating a new transaction
    return view('pembayaran.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgl_transaksi' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'quantity' => 'required',
            'subtotal' => 'required',
            'bayar' => 'required',
        ]);
        // Create a new transaction
        $transaksi = new Transaksi;
        $transaksi->tgl_transaksi = $request->input('tgl_transaksi');
        $transaksi->save();

        // Create a new detail transaksi
        $detailTransaksi = new DetailTransaksi;
        $detailTransaksi->id_transaksi = $transaksi->id;
        $detailTransaksi->id_barang = $request->input('kode_barang');
        $detailTransaksi->jumlah = $request->input('quantity');
        $detailTransaksi->total_harga = $request->input('subtotal');
        $detailTransaksi->save();

        // Store other fields in the database as needed

        // Redirect or return a response
        return redirect()->route('transaksi.index')->with('success', 'Transaction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function detailbayar(){
        return view('pembayaran.show');
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
