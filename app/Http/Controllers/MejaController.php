<?php

namespace App\Http\Controllers;

use App\Models\meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meja.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, meja $meja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(meja $meja)
    {
        //
    }
}
