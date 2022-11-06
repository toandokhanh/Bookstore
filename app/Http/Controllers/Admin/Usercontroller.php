<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function adduser(Request $request){
        if(Auth::guard('admin')->check()){
            return view('admin.adduser');
        }else{
            return redirect()->route('admin-login');
        }
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
    //
    public function store(Request $request)
    {   
        // tạo 1 cart mới
        DB::table('carts')
        ->insert(['id'=>null,'ac_id'=>null]);
        // select ra id của cart mới tạo
        $cart_id = DB::table('carts')->max('id');
        // tạo mới người dùng
        $model = 'App\Models\User';
        $model = new $model;
        $validate = $request->validate([
            'phone' => 'required|numeric',
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);
        $hash = $request->input('password');
        $hashed = Hash::make($hash);
        // var_dump($hashed);exit;
        $model->{'cart_id'} = $cart_id;
        $model->{'use_name'} = $request->input('use_name');
        $model->{'address'} = $request->input('address');
        $model->{'phone'} = $request->input('phone');
        $model->{'email'} = $request->input('email');
        $model->{'gender'} = $request->input('gender');
        $model->{'role'} = $request->input('role');
        $model->{'password'} = $hashed;
        $model->save();
        return view('admin.adduser')."<span class='suc'>Thêm người dùng thành công</span>";exit;
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
    public function update(Request $request, $id){
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
