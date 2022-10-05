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
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/topbrands', function () {
    return view('topbrands');
})->name('topbrands');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/detail', function () {
    return view('detail');
})->name('detail');
// Route::get('/productbycart', function () {
//     return view('productbycart');
// })->name('productbycart');
//admin
Route::get('/domain-admin', function () {
    return view('admin.home');
})->name('admin');
Route::group(['middleware' => 'auth'], function(){ 
    
    //đã đăng nhập
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
    //hồ sơ của user
    Route::view('/profile', 'profile')->name('profile');
    // Route::put('profile', [])->name('profile.update');
});
// Route::get('/index.php/dashboard', function () {
//     return "Chucs";
// });

// test 
Route::get('/{slug}-{id}.html', function ($slug, $id) {
    return "Slug:$slug <br> Id: $id";
});
// Route::get('/produ
require __DIR__.'/auth.php';