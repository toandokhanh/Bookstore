<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function index(Request $request, $cart_id)
    {
        abort_unless((int) $cart_id === (int) $request->user()->cart_id, 403);
        DB::transaction(function () use ($request, $cart_id) {
            Cart::whereKey($cart_id)->lockForUpdate()->firstOrFail();
            $details = CartItem::where('cart_id', $cart_id)->lockForUpdate()->get();
            abort_if($details->isEmpty(), 422, 'The cart is empty.');
            $total = 30000;
            $amount = 0;
            foreach ($details as $detail) {
                abort_unless($detail->quantity > 0 && $detail->quantity <= 100, 422);
                $product = Product::findOrFail($detail->product_id);
                $total += $product->product_price * $detail->quantity;
                $amount += $detail->quantity;
            }
            abort_if($amount > 127, 422, 'Order quantity exceeds the legacy database limit.');
            $bill = new Bill;
            $bill->ac_id = $request->user()->id;
            $bill->total = $total;
            $bill->bill_amount = $amount;
            $bill->confirmed = false;
            $bill->save();
            CartItem::where('cart_id', $cart_id)->delete();
        });
        return view('checkout');
    }

    public function update($id)
    {
        $bill = Bill::findOrFail($id);
        $bill->confirmed = true;
        $bill->save();
        return back();
    }

    public function delete(Request $request, $id)
    {
        Bill::where('ac_id', $request->user()->id)->where('confirmed', false)->findOrFail($id)->delete();
        return redirect()->route('orderhistory');
    }
}
