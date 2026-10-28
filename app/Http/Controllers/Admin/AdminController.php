<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function LoginPost(Request $request){
        $credentials = $request->validate(['email' => 'required|email', 'password' => 'required|string']);
        $credentials['role'] = 2;
        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('admin');
            exit();
        }else{
            return view('admin.login').
            "<span class='bug'>Thông tin đăng nhập không đúng !</span>";
            exit();

        }
    }
    public function Dashboard(){
        if(Auth::guard('admin')->check()){
            return view('admin.home');
        }else{
            return redirect()->route('admin-login');
        }
    }
    public function Logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-login');
    }
    public function Profile(){
        if(Auth::guard('admin')->check()){
            return view('admin.profile');
        }else{
            return redirect()->route('admin-login');
        }
    }

}
