<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptionController extends Controller
{
    //
    public function encryptText($plain){
        echo encrypt($plain);
    }

    public function decryptText($cipher){
        echo decrypt($cipher);
    }
}
