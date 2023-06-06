<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\transaksi;
class LaporanController extends Controller
{
    public function index(){
       
        $transaksis = transaksi::all(); 

        return view('laporan.index', compact('transaksis'));
        
    }
}

