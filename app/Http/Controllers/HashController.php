<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HashController extends Controller
{
    //
    public function generateHash($plain){
        echo Hash::make($plain);
    }

    public function verifyHash( $hash){
        echo Hash::check('$2y$10$9n/gZi8xVDCFY9HYGdIo5O4h3orZhmYqs.tJ9hIDdJvFvu9rfXMJC', $hash ) ? 'Correct' : 'Failed';
    }
}
