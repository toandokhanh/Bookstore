<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
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
    public function addcatetory(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addcatetory');
        }else{
            return redirect()->route('admin-login');
        }
    }

    public function addslider(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addslider');
        }else{
            return redirect()->route('admin-login');
        }
    }
    public function index(Request $request)
    {
        //
        
        // return view('welcome');

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = 'App\Models\Products';
        $model = new $model;
        
        $validate = $request->validate([
            'product_price' => 'required|numeric'
        ]);
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs(
                'public',$name
            );
            $path = '/'.str_replace("public", "storage", $path);
            
        }
        $model->{'ac_id'} = $request->input('ac_id');
        $model->{'product_name'} = $request->input('product_name');
        $model->{'image'} = $path;
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
        return view('admin.addproduct')."<span class='suc'>Thêm sách thành công</span>";
        exit;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
