<?php

namespace App\Http\Controllers;
use App\Models\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_process(Request $request) {
      $input = $request->only(['email','password']);
      if (Auth::guard('admin')->attempt($input)) {
        if (Auth::guard('admin')->user()->role == 'Customer') {
          return redirect()->back();  
        }
        return redirect()->route('dashboard');
      }else{
        return redirect()->back();
      }
    }
}