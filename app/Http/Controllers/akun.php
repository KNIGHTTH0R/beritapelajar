<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akun extends Controller
{
    //
    public function user(){
    	return view('user');
    }


    public function admin(){
    	return view('admin');
    }
}
