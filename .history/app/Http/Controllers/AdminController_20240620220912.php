<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function post_page(){
        return view('admin.posts.post_page');
    }
    public function add_post(Request ){

    }
}
