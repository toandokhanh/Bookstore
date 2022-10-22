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
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
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
    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }
    public function Profile(){
        if(Auth::guard('admin')->check()){
            return view('admin.profile');
        }else{
            return redirect()->route('admin-login');
        }
    }
    public function Feedback(Request $request){
        $credentials = $request->only('use_name', 'email');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin-feedback');
            exit();
        }else{
            return view('admin.login').
            "<span class='bug'>Thông tin đăng nhập không đúng !</span>"; 
            exit();
        
        }
    }
}
