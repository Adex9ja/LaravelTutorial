<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function index(){
        return view('ajax_view');
    }

    public function formPost(Request $request){
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }
}
