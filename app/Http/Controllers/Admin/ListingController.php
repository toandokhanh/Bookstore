<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ListingController extends Controller
{
    //
    public function index(Request $request, $modelName){   
        $model = '\App\Models\\'.ucfirst($modelName); 
        $records = $model::paginate(100);
        $model = new $model;
        $configs = $model->listingConfig();
        $adminUser = Auth::guard('admin')->user();
        if(Auth::guard('admin')->check()){
            return view('admin.listing', [
                'user' => $adminUser,
                'records'=> $records,
                'configs'=> $configs,
            ]);
        }else{
            return redirect()->route('admin-login');
        }


    }
    public function addproduct(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addproduct');
        }else{
            return redirect()->route('admin-login');
        }
    }
    public function addcatetory(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addcatetory');
        }else{
            return redirect()->route('admin-login');
        }
    }
    public function adduser(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.adduser');
        }else{
            return redirect()->route('admin-login');
        }
    }
}
