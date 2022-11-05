<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Products;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Slider;
use App\Models\Catetorys;
use App\Models\User;

class ListingController extends Controller
{
    //select
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
                'model' => $modelName,
            ]);
        }else{
            return redirect()->route('admin-login');
        }


    }
    //edit
    public function edit($model, $id){
        $$model = '\App\Models\\'.ucfirst($model); 
        // dd($$model); exit;
        return view('admin.edit'.strtolower($model),[
            'id' => $id,
            'model' => $model
        ], compact($model));
    }
    

    //update User

    // xóa 
    public function delete($model ,$id)
    {
        $$model = '\App\Models\\'.ucfirst($model); 
        $$model::where('id', $id)->delete();
        return redirect()->route('listing-index',['model'=>$model]);
    }
   
}
