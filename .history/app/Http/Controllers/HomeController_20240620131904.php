<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        if(Auth::id()){
            $usertype = Auth()
        }

        return view('layouts.Front.home');
    }
}