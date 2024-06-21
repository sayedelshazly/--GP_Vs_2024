<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('layouts.Front.home');
            }else if($usertype == 'admin'){
                return view('admin.index');
            }else{
                return redirect()->back();
            }
        }

        return view('layouts.Front.home');
    }

    public function home(){
        $posts = Post::latest()->take(3)->get();
        return view('layouts.Front.home', compact('posts'));
    }
    public function showAllPosts(){
        $posts = Post::get();
        return view('layouts.Front.allPosts', compact('posts'));
    }
}