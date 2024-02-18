<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index(){
        return view('nutriguide.admin_auth.login');
    }

    public function login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard');
        }else{
            return back();
        }
    }

    public function dashboard(){
        return view('nutriguide.admin_auth.index');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.form');
    }
}
