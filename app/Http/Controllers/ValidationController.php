<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    //

    public function index(){
        return view('error_view');
    }
    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[
            'username'=>'required|max:8',
            'password'=>'required'
        ]);
    }
}
