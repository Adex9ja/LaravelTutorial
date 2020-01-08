<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function setSession(Request $request, $username){
        $request->session()->put('username', $username);
        echo 'Session set';
    }
    public function getSession(Request $request){
        echo $request->session()->get('username');
    }

    public function forgetSession(Request $request){
        $request->session()->forget('username');
        echo 'Session Forgot';
    }
}
