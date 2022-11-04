<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index(Request $request, $cart_id){
        $products = DB::table('products')
        ->whereIn('products.id', [$request->product_id])
        ->get();
        foreach($products as $product)
        $tatol = $product->product_price * $request->quantity;
        $cart_detail = new Cart_detail;
        $cart_detail->{'product_id'} = $request->product_id;
        $cart_detail->{'cart_id'} = $cart_id;
        $cart_detail->{'quantity'} = $request->quantity;
        $cart_detail->{'total_price'} = $tatol;
        $cart_detail->save();
        // return "Giỏ hàng $cart_id chứa sản phẩm $request->product_id với số lượng $request->quantity có tổng giá là $tatol";
        return redirect()->route('cart')->with('alert','Thêm sản phẩm vào giỏ hàng thành công');
    }


    public function delete($id)
    {
        $cart_detail = new Cart_detail;
        $cart_detail::where('id', $id)->delete();
        return redirect()->route('cart');
    }
}
