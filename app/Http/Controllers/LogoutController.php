<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logout;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index(){
        Auth::guard('admin')->logout();
        return redirect()->to('/');
    }
}