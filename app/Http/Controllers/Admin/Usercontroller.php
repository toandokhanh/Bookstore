<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
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
