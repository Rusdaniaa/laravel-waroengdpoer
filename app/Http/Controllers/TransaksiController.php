<?php

namespace App\Http\Controllers;
use App\Exports\TransaksiExport;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\TransaksiDetail;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();

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
    public function bayar($id)
    {
        $transaksi = Transaksi::find($id);
        $detailTransaksi = TransaksiDetail::with('menu')->where('transaksi_id', '=', $id)->get();
        return view('pembayaran.bayar', compact('transaksi', 'detailTransaksi'));
    }

    public function proses_bayar(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->bayar = $request->input('bayar');
        $transaksi->kembalian = $request->input('bayar') - $request->input('total');
        $transaksi->update();
        $detail = TransaksiDetail::where('transaksi_id','=',$transaksi->id)->get();
        // return redirect()->route('page_pembayaran');
        return view('print',compact('detail','transaksi'));
    }

    public function export(Request $request)
    {
        if ($request->has('tanggal_awal') && $request->has('tanggal_awal')) {
            $tanggal_awal =$request->input('tanggal_awal');
            $tanggal_akhir =$request->input('tanggal_akhir');
        }
        // dd($tanggal_akhir, $tanggal_awal);
        return Excel::download(new TransaksiExport($tanggal_awal, $tanggal_akhir), 'DataTransaksi.xlsx');
    }
}
