<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        return view('email_view');
    }

    public function sendMail(Request $request){
        $email = $request->input('email');
        Mail::send('welcome', ['user' => 'Adeyemo Adeolu'], function ($message) use ($email) {
            $message->to($email, 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('adex9ja2@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox => ".$email;
    }
}
