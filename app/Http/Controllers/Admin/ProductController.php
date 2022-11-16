<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addproduct');
        }else{
            return redirect()->route('admin-login');
        }
    }
    

    public function index(Request $request)
    {
        $data['products'] = Products::orderBy('id','desc')->paginate(5);
        return view('admin.', $data);

    }
    public function add(Request $request){
        dd($request->all());
        return view('welcome');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('listing-index',['model'=>'Products']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        $model = 'App\Models\Products';
        $model = new $model;
        
        $validate = $request->validate([
            'product_price' => 'required|numeric'
        ]);
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move(public_path('storage'), $name);
            $request->merge(['product_image' => $name]);
            $image = '/storage/'.$request->product_image;
        }
        
        $model->{'ac_id'} = $request->input('ac_id');
        $model->{'product_name'} = $request->input('product_name');
        $model->{'image'} = $image;
        $model->{'cate_id'} = $request->input('cate_id');
        $model->{'publisher_id'} = $request->input('publisher_id');
        $model->{'author_id'} = $request->input('author_id');
        $model->{'describe'} = $request->input('describe');
        $model->{'product_price'} = $request->input('product_price');
        $model->{'size'} = $request->input('size');
        $model->{'translater'} = $request->input('translater');
        $model->{'year_of_manufacture'} = $request->input('year_of_manufacture');
        $model->{'number_of_pages'} = $request->input('number_of_pages');
        $model->save();
        return redirect()->route('listing-index',['model'=>'Products'])
        ->with('success','Thêm sản phẩm thành công');
        // view('admin.addproduct')."<span class='suc'>Thêm sách thành công</span>";
        exit;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        //
        return view('admin.listing',['model'=>'Products'],compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editproduct',[
            'id' => $id
        ], compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //update sản phẩm
    public function update(Request $request, $id){
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id', $id)->delete();
        return redirect()->route('listing-index',['model'=>'Products'])->with('thongbao','Xóa sản phẩm thành công');
    }
}
