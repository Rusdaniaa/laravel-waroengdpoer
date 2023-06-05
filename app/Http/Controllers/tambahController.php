<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambah;
class tambahController extends Controller
{
    public function index(){

        return view('tambah.tambah');
        
    }
    public function toTambah(){
        return view('tambah.tambah');
    }
    public function create()
    {

    }

    public function saveData(Request $request)
{
    $request->validate([
        'name_barang' => 'required|string',
        'harga' => 'required|integer',
        'keterangan' => 'required|string',
        'barang' => 'required|image',

    ]);

    if ($request->hasFile('barang')) {
        $imagePath = $request->file('barang')->store('barangs', 'public');

        $barang = new barang;
        $barang->name = $request->input('name_barang');
        $barang->harga = $request->input('harga');
        $barang->keterangan = $request->input('keterangan');
        $barang->filename = $imagePath;
        $barang->save();

        return redirect('barang')->with('success', 'Data berhasil diunggah.');
    }

    return redirect('barangtambah')->with('error', 'Gagal mengunggah data.');
}
}
