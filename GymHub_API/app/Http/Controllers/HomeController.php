<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Eduardo(){
        return "Eduardo es un tremendo gilipollas";
    }

    public function Home(){
        return view('logingym');
    }
}
