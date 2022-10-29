<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{

    public function addpublisher(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addpublisher');
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
        
        $model = 'App\Models\Publisher';
        $model = new $model;
        $validate = $request->validate([
            'publisher_name' => 'required',
            'publishers_address' => 'required'
        ]);
        $model->{'publisher_name'} = $request->input('publisher_name');
        $model->{'publishers_address'} = $request->input('publishers_address');
        $model->save();
        return view('admin.addpublisher')."<span class='suc'>Thêm Nhà xuất bản thành công </span>";
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
        // update nhà xuát bản
    public function update(Request $request, $id){
        $publishers = new Publisher;
        $publishers = Publisher::find($id);
        $validate = $request->validate([
            'publisher_name' => 'required',
            'publishers_address' => 'required'
        ]);
        $publishers->{'publisher_name'} = $request->input('publisher_name');
        $publishers->{'publishers_address'} = $request->input('publishers_address');
        $publishers->update();
        $publishers->save();
        return redirect()->route('listing-index',['model'=>'Publisher'])->with('thongbao','Cập nhật thông tin Nhà xuất bản thành công');
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
