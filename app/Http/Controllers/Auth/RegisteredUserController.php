<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // tạo 1 cart mới
        DB::table('carts')
        ->insert(['id'=>null,'ac_id'=>null]);
        // select ra id của cart mới tạo
        $cart_id = DB::table('carts')->max('id');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // var_dump($request); exit;
        $user = User::create([
            
            'cart_id' => $cart_id,
            'use_name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    public function update(Request $request)
    {
        
        $account = User::find($request->id);
        $validate = $request->validate([
            'use_name' => 'required',
            'email' => 'required|email',
            'address' => 'required|max:100',
            'phone' => 'required|numeric',
        ]);
        $account->{'use_name'} = $request->use_name;
        $account->{'email'} = $request->email;
        $account->{'address'} = $request->address;
        $account->{'phone'} = $request->phone;
        $account->update();
        $account->save();
        return back()->withInput();
    }
}
