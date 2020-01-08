<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('Second');
    }

    public function showPath(Request $request) {
        $uri = $request->path();
        echo '<br>URI: '.$uri;

        $url = $request->url();
        echo '<br>';

        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';

        echo 'Method: '.$method;
    }

    public function register(Request $request){
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';

        //Retrieve the username input field
        $username = $request->username;
        echo 'Username: '.$username;
        echo '<br>';

        //Retrieve the password input field
        $password = $request->password;
        echo 'Password: '.$password;
    }
}
