<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\catetorys;
use Illuminate\Http\Request;
class CatetoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcatetory(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addcatetory');
        }else{
            return redirect()->route('admin-login');
        }
    }
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
        $model = 'App\Models\Catetorys';
        $model = new $model;
        $validate = $request->validate([
            'cate_name' => 'required'
        ]);
        $model->{'cate_name'} = $request->input('cate_name');
        $model->save();
        return view('admin.addcatetory')."<span class='suc'>Thêm Danh mục thành công </span>";
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
       //update Catetory
       public function update(Request $request, $id){
        $catetorys = new catetorys;
        $catetorys = Catetorys::find($id);
        $validate = $request->validate([
            'cate_name' => 'required',
        ]);
        $catetorys->{'cate_name'} = $request->input('cate_name');
        $catetorys->update();
        $catetorys->save();
        return redirect()->route('listing-index',['model'=>'Catetorys'])->with('thongbao','Cập nhật thông tin danh mục thành công');
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
