<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Usercontroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CatetoryController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Auth\ProductUserController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CartController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/test', function () {
    return view('checkout');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//chưa đăng nhập
Route::get('/', function () {
return view('home');
})->name('/');
Route::get('/topbrands', function () {
    return view('topbrands');
})->name('topbrands');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/detail', function () {
    return view('detail');
})->name('detail');
//select ra tất cẩ sản phẩm
Route::get('/products', [ProductUserController::class, 'index'])->name('products');
// select sản phẩm theo danh mục
Route::get('/products/cate{id}', [ProductUserController::class, 'productsCate'])->name('productsCate');
//select chi tiết từng sản phẩm
Route::get('/detail/product{id}', [ProductUserController::class, 'detail'])->name('detail-product');
// Route::get('/productbycart', function () {
//     return view('productbycart');
// })->name('productbycart');


Route::group(['middleware' => 'auth'], function(){ 
    //đã đăng nhập
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
    //hồ sơ của user
    Route::view('/profile', 'profile')->name('profile');
    // Route::put('profile', [])->name('profile.update');
    Route::post('/cart/{cart_id}', [CartController::class, 'index'])->name('order');
    Route::get('/cart/delete{id}', [CartController::class, 'delete'])->name('cart-delete');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart-update');
    // trang vỏ hàng
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/checkout{cart_id}', [BillController::class, 'index'])->name('checkout');
    // order
    
});





//admin
Route::prefix('ad')->group(function(){
    //đã đăng nhập
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin');

    //trang đăng nhập
    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin-login');
    Route::post('/login', [AdminController::class, 'LoginPost'])->name('admin-loginPost');

    //trang thông tin cá nhân của admin
    Route::get('/profile', [AdminController::class, 'Profile'])->name('admin-profile');

    //đăng xuất
    Route::get('/logout', [AdminController::class, 'Logout'])->name('admin-logout');

    //phản hồi của khách hành trả vè admin
    Route::get('/feedback', function(){
        return view('admin.feedback');
    })->name('admin-feedback');

    //quản lý sản phẩm
    Route::get('/listing/addproduct', [ProductController::class, 'addproduct'])->name('listing-addproduct');
    Route::post('/listing/addproduct', [ProductController::class, 'store'])->name('listing-store-addproduct');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('listing-update-product');
    //ok

    // Quản lý danh mục
    Route::get('/listing/addcatetory', [CatetoryController::class, 'addcatetory'])->name('listing-addcatetory');
    Route::post('/listing/addcatetory', [CatetoryController::class, 'store'])->name('listing-store-addcatetory');
    Route::post('/catetory/update/{id}', [CatetoryController::class, 'update'])->name('listing-update-catetory');
    //ok

    //Quản lý người dùng 
    Route::get('/listing/adduser', [Usercontroller::class, 'adduser'])->name('listing-adduser');
    Route::post('/listing/adduser', [Usercontroller::class, 'store'])->name('listing-store-adduser');
    Route::post('/user/update/{id}', [Usercontroller::class, 'update'])->name('listing-update-user');
    //ok

    //Quản lý tác giả
    Route::get('/listing/addauthor', [AuthorController::class, 'addauthor'])->name('listing-addauthor');
    Route::post('/listing/addauthor', [AuthorController::class, 'store'])->name('listing-store-addauthor');
    Route::post('author/update/{id}', [AuthorController::class, 'update'])->name('update-author');
    //ok


    //Quản lý nhà xuất bản
    Route::get('/listing/addpublisher', [PublisherController::class, 'addpublisher'])->name('listing-addpublisher');
    Route::post('/listing/addpublisher', [PublisherController::class, 'store'])->name('listing-store-addpublisher');
    Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('listing-update-publisher');
    //ok


    //thêm thanh trượt
    Route::get('/listing/addslider', [SliderController::class, 'addslider'])->name('listing-addslider');
    Route::post('/listing/addslider', [SliderController::class, 'store'])->name('listing-store-addslider');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('listing-update-slider');
    //ok

    //select tất cả các bảng từ csld đổ lên trang admin thông qua model các bảng
    Route::get('/listing/{model}', [ListingController::class, 'index'])->name('listing-index');
    //edit
    Route::get('/listing/edit/{model}/{id}', [ListingController::class, 'edit'])->name('listing-edit');
    //delete
    Route::get('/listing/delete/{model}/{id}', [ListingController::class, 'delete'])->name('listing-delete');
    
});






// Route::get('/produ
require __DIR__.'/auth.php';

// Route::get('/welcomee', function () {
//     return view('welcome');
// });

// test 
//Route::get('/{slug}-{id}.html', function ($slug, $id) {
//     return "Slug:$slug <br> Id: $id";
// });
// Route::prefix('test')->group(function(){
//     Route::get('/welcome',[ProductController::class, 'index'])->name('test');
//     Route::post('/welcome',[ProductController::class, 'add'])->name('handle');
// });