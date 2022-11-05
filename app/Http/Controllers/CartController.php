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
        $cart_details = new Cart_detail;
        $cart_details->{'product_id'} = $request->product_id;
        $cart_details->{'cart_id'} = $cart_id;
        $cart_details->{'quantity'} = $request->quantity;
        $cart_details->{'total_price'} = $tatol;
        $cart_details->save();
        // return "Giỏ hàng $cart_id chứa sản phẩm $request->product_id với số lượng $request->quantity có tổng giá là $tatol";
        return back()->withInput();
    }

    public function update(Request $request, $id){
       
        // $cart_details->intersect(Cart_detail::whereIn('cart_detail_id',$cart_detail_id)->get());
        // $cart_details = Cart_detail::where ('cart_detail_id', '=',$cart_detail_id)->first();
        // $cart_details = DB::table('cart_details')
        // ->whereIn('cart_detail_id',[$cart_detail_id])
        // ->get();
        // 
        $products = DB::table('products')
        ->whereIn('products.id', [$request->product_id])
        ->get();
        foreach($products as $product)
        $tatol = $product->product_price * $request->quantity;
        $cart_details = new Cart_detail;
        $cart_details = Cart_detail::find($id);
        // dd($id); exit;
        $cart_details->{'product_id'} =  $request->input('product_id');
        $cart_details->{'cart_id'} =  $request->input('cart_id');
        $cart_details->{'quantity'} = $request->input('quantity');
        $cart_details->{'total_price'} = $tatol;
        $cart_details->update();
        $cart_details->save();
        return redirect()->route('cart')->with('alert','Cập nhật giỏ hàng thành công');
    }




    public function delete($id)
    {
        $cart_detail = new Cart_detail;
        $cart_detail::where('id', $id)->delete();
        return redirect()->route('cart');
    }
}
