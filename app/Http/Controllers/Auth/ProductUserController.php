<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductUserController extends Controller
{
    //
    public function index(){
        $products = DB::table('products')
        ->get();
        return view('products', ['products'=>$products]);
    }
    public function detail($id)
    {   
        // $detail = new Products;	
        return view('detail',['id' => $id]);
    }
    public function productsCate($cate_id)
    {   
        $products = DB::table('products')
        ->join('catetorys', 'products.cate_id', '=', 'catetorys.id')
        ->whereIn('products.cate_id', [$cate_id])	
        ->select('products.*','catetorys.cate_name')
        ->get();
        $cate = $products[0]->cate_name;
        return view('products',['products'=>$products],['cate_name'=>$cate]);
    }
    
}
