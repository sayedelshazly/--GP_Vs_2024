<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $posts = Post::latest()->take(3)->get(); //--Error 2
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('layouts.Front.home', compact('posts'));
            }else if($usertype == 'admin'){
                return view('admin.index');
            }else{
                return redirect()->back();
            }
        }

        return view('layouts.Front.home');
    }

    public function showAllPosts(){
        $posts = Post::all();
        return view('layouts.Front.allPosts', compact('posts'));
    }
    public function home(){
        $posts = Post::latest()->take(3)->get();
        return view('layouts.Front.home', compact('posts'));
    }
    public function showOnePost($id){
        $post = Post::findOrFail($id);
        return view('layouts.Front.onePost', compact('post'));
    }
    public function create_post(){
        return view('layouts.Front.user.create_post');
    }
    public function user_post(Request $request){

        $user = Auth()->user(); //---[call the user table]
        $userId = $user->id;
        $userName = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $image = $request->image;
        if($image){ //---Error 1
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('postImages', $imageName);
            $post->image = $imageName;
        }
        $post->user_id = $userId;
        $post->name = $userName;
        $post->usertype = $usertype;
        $post->post_status = 'pending';
        $post->save();
        return redirect()->back();
    }
    public function user_allPosts(){
        $user = Auth()->user();
        $userId = $user->id;
        $posts_user = Post::where('user_id', $userId)->get();
        return view('layouts.Front.user.user_allPosts', compact('posts_user'));
    }
    public function user_onePost($id){
        $post = Post::findOrFail($id);
        return view('layouts.Front.user.user_onePost', compact('post'));
    }
    public function delete_user_post($id){
        Post::destroy($id);
        return redirect()->route('allPosts');
    }
    public function edit_user_post($id){
        $post = Post::findOrFail($id);
        return view('layouts.Front.user.edit_user_post', compact('post'));
    }
    public function edit_user_post($id){
        $post = Post::findOrFail($id);
        return view('layouts.Front.user.edit_user_post', compact('post'));
    }
}