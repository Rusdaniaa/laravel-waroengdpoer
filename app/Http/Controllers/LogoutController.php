<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logout;

class LogoutController extends Controller
{
    public function index(){

        return view('logout.logout');

        
    }
}
