<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
class LaporanController extends Controller
{
    public function index(){
        $laporans = Laporan::all();

        return view('laporan.index', compact('laporans'));

        
    }
}

