<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    // $datas = CartItem::where('cart_detail_id', auth()->user()->id)->get();
    // public function find($cart_detail_id) {
    //     return parent::find($cart_detail_id);
    // }
    use HasFactory;
    protected $table = 'cart_details';
}
