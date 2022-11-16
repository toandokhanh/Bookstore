<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    
    public function addslider(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addslider');
        }else{
            return redirect()->route('admin-login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $model = 'App\Models\Slider';
        $model = new $model;
        
        if($request->hasFile('slider_image')){
            $name = $request->file('slider_image')->getClientOriginalName();
            $path = $request->file('slider_image')->move(public_path('storage'), $name);
            // $path = '/'.str_replace("public", "storage", $path);
            $request->merge(['image' => $name]);
            $image = '/storage/'.$request->image;
        }
        $model->{'slider_name'} = $request->input('slider_name');
        $model->{'slider_image'} = $image;
        $model->save();
        return view('admin.addslider')."<span class='suc'>Thêm Thanh trượt thành công</span>";
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
   
    // update Slider
    public function update(Request $request, $id){
        $sliders = new slider;
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
