<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart_detail;
class BillController extends Controller
{
    //
    public function index($cart_id){
        $cart_details = DB::table('cart_details')
		->whereIn('cart_id',[$cart_id])	
		->get();
        foreach($cart_details as $cart_detail)
        if(isset($cart_detail)){
            $cart_detail = new Cart_detail;
            $cart_detail::where('cart_id', $cart_id)->delete();
            return view('checkout', ['cart_detail' => $cart_detail]);
        }
        return redirect()->route('products');
    }
}
