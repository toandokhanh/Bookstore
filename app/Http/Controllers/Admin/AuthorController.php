<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addauthor(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.addauthor');
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = 'App\Models\Author';
        $model = new $model;
        $validate = $request->validate([
            'author_name' => 'required',
            'year_of_birth' => 'required|numeric|min:4',
            'nationality' => 'required'
        ]);
        $model->{'author_name'} = $request->input('author_name');
        $model->{'year_of_birth'} = $request->input('year_of_birth');
        $model->{'nationality'} = $request->input('nationality');
        $model->save();
        return view('admin.addauthor')."<span class='suc'>Thêm Tác giả thành công </span>";
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
      /// update tác giả
    public function update(Request $request, $id){
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
