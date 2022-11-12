<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart_detail;
use App\Models\Bill;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Type\NullType;

class BillController extends Controller
{
    //
    public function index($cart_id, $db_total, $amount){
            $cart_details = DB::table('cart_details')
            ->whereIn('cart_id',[$cart_id])	
            ->get();
            foreach($cart_details as $cart_detail)
            if(isset($cart_detail)){
            $ship = 30000;
            $total_bill = $cart_detail->total_price + $ship;
            // tạo bill
            $bill = new Bill;
            $bill->{'ac_id'} = $cart_detail->cart_id;
            $bill->{'total'} = $db_total;
            $bill->{'bill_amount'} = $amount;
            $bill->{'confirmed'} = false;
            $bill->save();
            // xóa đơn hàng khỏi cart
            $cart_detail = new Cart_detail;
            $cart_detail::where('cart_id', $cart_id)->delete();
            return view('checkout', ['cart_detail' => $cart_detail]);
        }
        return redirect()->route('products');
        
    }
    public function update($id){
        if(Auth::guard('admin')->check()){
            $bill = Bill::find($id);
            $bill->confirmed = true;
            $bill->update();
            $bill->save();
            return back()->withInput();
        }
        else{
            return redirect()->route('admin-login');
        }
        
    }
    public function delete($id){
        $bill = new Bill;
        $bill::where('id', $id)->delete();
        return redirect()->route('orderhistory');
    }
}
