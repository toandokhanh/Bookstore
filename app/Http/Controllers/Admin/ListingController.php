<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function index(Request $request, $modelName){   
        $model = '\App\Models\\'.ucfirst($modelName); 
        $records = $model::paginate(100);
        // var_dump($records); exit;
        $adminUser = Auth::guard('admin')->user();
        if(Auth::guard('admin')->check()){
            return view('admin.listing', [
                'user' => $adminUser,
                'records'=> $records,
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
}
