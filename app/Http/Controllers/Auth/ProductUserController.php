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

    }
    public function detail($id)
    {   
        // $detail = new Products;	
        return view('detail',['id' => $id]);
    }
}
