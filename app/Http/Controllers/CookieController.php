<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(){
        $response = new Response("Hello world!");
        $response->withCookie(cookie('name', 'adex9ja', 1));
        return $response;
    }

    public function getCookie(Request $request){
        return $request->cookie('name');
    }
}
