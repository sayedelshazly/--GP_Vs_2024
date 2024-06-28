<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $posts = Post::latest()->take(3)->where('post_status', 'active')->get(); //--Error 2
            $product = Product::latest()->take(2)->get();
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('layouts.Front.home', compact('posts', 'product'));
            }else if($usertype == 'admin'){
                return view('admin.index');
            }else{
                return redirect()->back();
            }
        }

        return view('layouts.Front.home', compact('product', 'posts'));
    }

    public function showAllPosts(){
        $posts = Post::where('post_status', 'active')->get();
        return view('layouts.Front.posts.allPosts', compact('posts'));
    }
    public function home(){
        $posts = Post::latest()->take(3)->where('post_status', 'active')->get();
        $product = Product::latest()->take(2)->get();

        return view('layouts.Front.home', compact('posts', 'product'));
    }
    public function showOnePost($id){
        $post = Post::findOrFail($id);
        return view('layouts.Front.posts.onePost', compact('post'));
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
        return redirect()->back()->with('message', 'Post Created Successfully!');
    }
    public function user_allPosts(){
        $user = Auth()->user();
        $userId = $user->id;
        $posts_user = Post::where('user_id', $userId)->where('post_status', 'active')->get();
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
    public function update_user_post(Request $request , $id){
        $posts = Post::findOrFail($id);
        $posts->title = $request->title;
        $posts->description = $request->description;

        $image = $request->image;
        if($image){ //---Error 1
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('postImages', $imageName);
            $posts->image = $imageName;
        }

        $posts->save();

        return redirect()->back()->with('message', 'Post Updated Successfully!');
    }
    // products
    // public function show_Products(){
    //     $product = Product::all();
    //     return view('layouts.Front.portfolio', compact('product'));
    // }
    public function show_allProducts(){
        $product = Product::all();
        return view('layouts.Front.products.show_allProducts', compact('product'));
    }
    public function show_oneProduct($id){
        $product = Product::findOrFail($id);
        return view('layouts.Front.products.show_oneProduct', compact('product'));
    }
    
    public function add_toChart($id){
        $product_id = $id;
        $user = Auth()->user();
    }
}