<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnoverController extends Controller
{
    //
    public function select(){
        return view('admin.turnover');
    }
}
