<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('layouts.Front.home');
            }else if($usertype == 'admin'){
                ret
            }
        }

        return view('layouts.Front.home');
    }
}