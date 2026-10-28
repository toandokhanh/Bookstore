<?php

namespace App\Http\Controllers;

use App\Models\Cart_detail;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request, $cart_id)
    {
        abort_unless((int) $cart_id === (int) $request->user()->cart_id, 403);
        $data = $request->validate(['product_id' => 'required|integer|exists:products,id', 'quantity' => 'required|integer|min:1|max:100']);
        $product = Products::findOrFail($data['product_id']);
        $detail = new Cart_detail;
        $detail->product_id = $product->id;
        $detail->cart_id = $request->user()->cart_id;
        $detail->quantity = $data['quantity'];
        $detail->total_price = $product->product_price * $data['quantity'];
        $detail->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(['quantity' => 'required|integer|min:1|max:100']);
        $detail = Cart_detail::where('cart_id', $request->user()->cart_id)->findOrFail($id);
        $product = Products::findOrFail($detail->product_id);
        $detail->quantity = $data['quantity'];
        $detail->total_price = $product->product_price * $data['quantity'];
        $detail->save();
        return redirect()->route('cart');
    }

    public function delete(Request $request, $id)
    {
        Cart_detail::where('cart_id', $request->user()->cart_id)->findOrFail($id)->delete();
        return redirect()->route('cart');
    }
}
