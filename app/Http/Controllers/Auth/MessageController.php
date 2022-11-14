<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //
    public function feedbackAccount(Request $request){
        $accounts = DB::table('accounts')
        ->whereIn('accounts.id', [$request->ac_id])
        ->get();
        foreach($accounts as $account)
        $Message = new Message;
        $Message->{'use_name'} = $account->use_name;
        $Message->{'email'} = $account->email;
        $Message->{'phone'} = $account->phone;
        $Message->{'feedback'} =  $request->feedback;
        $Message->{'seen'} =  false;
        $Message->save();
        return back()->withInput();
    }



    public function feedbackUse(Request $request){
        $Message = new Message;
        $Message->{'use_name'} = $request->use_name;
        $Message->{'email'} = $request->email;
        $Message->{'phone'} = $request->phone;
        $Message->{'feedback'} =  $request->feedback;
        $Message->{'seen'} =  false;
        $Message->save();
        return back()->withInput();
    }
    
    public function update($id){
        $message = Message::find($id);
        // dd($id); exit;
        $message->{'seen'} = 1;
        $message->update();
        $message->save();
        return back()->withInput();
    }
}
