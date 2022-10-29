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
    //update sản phẩm
    public function updateProduct(Request $request, $id){
        // return "hi"; exit;
        $validate = $request->validate([
            'product_price' => 'required|numeric'
        ]);
        // dd($id);
        $products = new Products;
        $products = Products::find($id);
        $products->{'ac_id'} = $request->input('ac_id');
        $products->{'product_name'} = $request->input('product_name');
        $products->{'image'} = $request->input('product_image');
        $products->{'cate_id'} = $request->input('cate_id');
        $products->{'publisher_id'} = $request->input('publisher_id');
        $products->{'author_id'} = $request->input('author_id');
        $products->{'describe'} = $request->input('describe');
        $products->{'product_price'} = $request->input('product_price');
        $products->{'size'} = $request->input('size');
        $products->{'translater'} = $request->input('translater');
        $products->{'year_of_manufacture'} = $request->input('year_of_manufacture');
        $products->{'number_of_pages'} = $request->input('number_of_pages');
        // dd($products->all());
        $products->update();
        $products->save();
        return redirect()->route('listing-index',['model'=>'Products'])->with('thongbao','Cập nhật sản phẩm thành công');
    }

    /// update tác giả
    public function updateAuthor(Request $request, $id){
        $authors = new Author;
        $authors = Author::find($id);
        $validate = $request->validate([
            'author_name' => 'required',
            'year_of_birth' => 'required|numeric|min:4',
            'nationality' => 'required'
        ]);
        $authors->{'author_name'} = $request->input('author_name');
        $authors->{'year_of_birth'} = $request->input('year_of_birth');
        $authors->{'nationality'} = $request->input('nationality');
        $authors->update();
        $authors->save();
        return redirect()->route('listing-index',['model'=>'Author'])->with('thongbao','Cập nhật thông tin tác giả thành công');
    }
    // update Slider
    public function updateSlider(Request $request, $id){
        $sliders = new Slider;
        $sliders = Slider::find($id);
        $validate = $request->validate([
            'slider_name' => 'required',
            'slider_image' => 'required',
        ]);
        $sliders->{'slider_name'} = $request->input('slider_name');
        $sliders->{'slider_image'} = $request->input('slider_image');
        $sliders->update();
        $sliders->save();
        return redirect()->route('listing-index',['model'=>'Slider'])->with('thongbao','Cập nhật thông tin thanh trượt thành công');
    }

    //update Catetory
    public function updateCatetory(Request $request, $id){
        $catetorys = new Catetorys;
        $catetorys = Catetorys::find($id);
        $validate = $request->validate([
            'cate_name' => 'required',
        ]);
        $catetorys->{'cate_name'} = $request->input('cate_name');
        $catetorys->update();
        $catetorys->save();
        return redirect()->route('listing-index',['model'=>'Catetorys'])->with('thongbao','Cập nhật thông tin danh mục thành công');
    }

    // update nhà xuát bản
    public function updatePublisher(Request $request, $id){
        $publishers = new Publisher;
        $publishers = Publisher::find($id);
        $validate = $request->validate([
            'use_name' => 'required',
            'publishers_address' => 'required'
        ]);
        $publishers->{'publisher_name'} = $request->input('publisher_name');
        $publishers->{'publishers_address'} = $request->input('publishers_address');
        $publishers->update();
        $publishers->save();
        return redirect()->route('listing-index',['model'=>'Publisher'])->with('thongbao','Cập nhật thông tin Nhà xuất bản thành công');
    }
    //update User
    public function updateUser(Request $request, $id){
        $users = new User;
        $users = User::find($id);
        $validate = $request->validate([
            'use_name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|min:10',
            'email' => 'required|email',
            'gender' => 'required|numeric',
            'role' => 'required|numeric',
            'password' => 'required'
        ]);
        $users->{'use_name'} = $request->input('use_name');
        $users->{'address'} = $request->input('address');
        $users->{'phone'} = $request->input('phone');
        $users->{'email'} = $request->input('email');
        $users->{'gender'} = $request->input('gender');
        $users->{'role'} = $request->input('role');
        $users->{'password'} = $request->input('password');
        $users->update();
        $users->save();
        return redirect()->route('listing-index',['model'=>'User'])->with('thongbao','Cập nhật thông tin Người dùng thành công');
    }
    // xóa 
    public function delete($model ,$id)
    {
        $$model = '\App\Models\\'.ucfirst($model); 
        $$model::where('id', $id)->delete();
        return redirect()->route('listing-index',['model'=>$model]);
    }
   
}
