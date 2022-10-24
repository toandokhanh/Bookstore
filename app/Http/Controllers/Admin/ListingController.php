<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Products;
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
    public function edit(Products $products, $id){
        return view('admin.editproduct',[
            'id' => $id
        ], compact('products'));
    }
    public function update(Request $request, Products $products){
        $products->update($request->all());
        dd($request->all());exit;
        return redirect()->route('listing-index',['model'=>'Products'])->with('thongbao','Cập nhật sản phẩm thành công');
    }

    public function delete(Products $products, $id){
        $products->delete(); 
        return redirect()->route('listing-index',['model'=>'Products'])->with('thongbao','Xóa sản phẩm thành công');
    }
   
}
