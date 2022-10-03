<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
//chưa đăng nhập
    Route::get('/', function () {
        return view('home');
    })->name('/');

Route::group(['middleware' => 'auth'], function(){ 
    
    //đã đăng nhập
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //hồ sơ của user
    Route::view('/profile', 'profile')->name('profile');
    // Route::put('profile', [])->name('profile.update');
});
// Route::get('/index.php/dashboard', function () {
//     return "Chucs";
// });
require __DIR__.'/auth.php';