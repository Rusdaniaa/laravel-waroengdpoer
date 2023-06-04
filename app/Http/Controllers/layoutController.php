<?php

namespace App\Http\Controllers;
use App\Models\layout;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(){

        return view('layouts.main');

        
    }
}
