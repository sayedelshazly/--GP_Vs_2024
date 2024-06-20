<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        if(user::id)

        return view('layouts.Front.home');
    }
}