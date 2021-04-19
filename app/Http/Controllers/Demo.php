<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo extends Controller
{
    //
    public function ui(){
        return view('welcome');
    }

    public function authCreate(){
        return view('Auth.create');
    }

    public function authUpdate(){
        return view('Auth.edit');
    }
}


