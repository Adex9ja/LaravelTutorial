<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    //
    public function index($locale){
        app()->setLocale($locale);
        echo trans('lang.msg');
    }
}
