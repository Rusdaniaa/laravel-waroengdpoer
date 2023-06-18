<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Barang::where('nama_barang','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Barang::paginate(5);
        }

        return view('barang.index')->with([
            'data' => $data]);
    }



    public function create()
    {
        $kategori = Kategori::all();
        return view('tambah.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string',
            'id_kategori'=>'required',
            'harga' => 'required|integer',
            'keterangan' => 'required|string',
            'barang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //upload image
        $image = $request->file('barang');
        $image->storeAs('public', $image->hashName());
        // dd($request);

         //create post
        $post =Barang::create([
            'barang'     => $image->hashName(),
            'nama_barang'     => $request->nama_barang,
            'harga'   => $request->harga,
            'keterangan'   => $request->keterangan,
        ]);
        //return response
        return redirect()->route('data_menu')->with('success', 'Data Barang Berhasil Ditambahkan!');
   }

    /**
     * Display the specified resource.
     */
    public function tampilkandata(string $id)
    {
        $data = Barang::find($id);
        return view('barang.show',compact('data'));

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

    }
    public function updatedata(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('data_menu')->with('success', 'Data Barang Berhasil Diupdate!');
    }
    public function deletedata(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('data_menu')->with('success', 'Data Barang Berhasil Dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function api_getBarang() {
        $barang = Barang::all();
        return response()->json(array('data'=>$barang));
    }
}
