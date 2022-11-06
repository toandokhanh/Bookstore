<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //
    public function index($cart_id){
        $ship = 30000;
        $cart_details = DB::table('cart_details')
		->whereIn('cart_id',[$cart_id])	
		->get();
        foreach($cart_details as $cart_detail)
        dd($cart_detail);exit;
        return $cart_id;
    }
}
