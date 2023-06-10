<?php

namespace App\Http\Controllers;

use App\Models\meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->has('search')){
            $mejas = meja::where('nomor_meja','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $mejas = meja::paginate(5);
        }


        return view('meja.index')->with([
            'mejas' => $mejas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    public function tambahdata()
    {
        $statusOptions = [
            ['value' => '1', 'label' => 'Tersedia'],
            ['value' => '2', 'label' => 'Tidak Tersedia'],
        ];

        return view('meja.createdata', compact('statusOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_meja' => 'required',
            'status' => 'required|in:1,2',
        ]);

        meja::create([
            'nomor_meja' => $request->nomor_meja,
            'status' => $request->status,
        ]);

        return redirect()->route('meja.index')->with('success', 'Meja berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(meja $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(meja $meja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, meja $mejas)
    {
        $status = $request->status == 'tersedia' ? 'tidak tersedia' : 'tersedia';
        $mejas->update(['status' => $status]);

        return redirect()->route('meja.index')
            ->with('success', 'Status meja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(meja $meja)
    {
        //
    }
}
