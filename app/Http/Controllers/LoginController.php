<?php

namespace App\Http\Controllers\Auth;
use App\Models\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('welcome');
}
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}