<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambah;
class tambahController extends Controller
{
    public function index(){

        return view('tambah.tambah');

        
    }
}
