<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            $path = $request->file('slider_image')->storeAs(
                'public',$name
            );
            $path = '/'.str_replace("public", "storage", $path);
        }
        $model->{'slider_name'} = $request->input('slider_name');
        $model->{'slider_image'} = $path;
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
