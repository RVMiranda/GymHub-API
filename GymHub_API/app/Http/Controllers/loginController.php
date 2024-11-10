<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('logingym');
    }

    public function gymOwner(){
        return response()->json(['status' => 'ok']);
    }
}
