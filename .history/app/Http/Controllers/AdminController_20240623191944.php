<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page(){
        return view('admin.posts.post_page');
    }
    public function add_post(Request $request){

        //users attributes
        $user = Auth()->user();
        $userId = $user->id;
        $name = $user->name;
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

        $post->post_status = 'active';
        $post->user_id = $userId;
        $post->name = $name;
        $post->usertype = $usertype;
        $post->save();

        return redirect()->back()->with('message', 'Post Add Successfully!');
    }
    public function show_posts(){
        $posts = Post::all();
        return view('admin.posts.show_posts', compact('posts'));
    }
    public function delete_post($id){
        $posts = Post::where('id', $id);
        $posts->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');

    }
    public function edit_post($id){
        $posts = Post::findOrFail($id);
        return view('admin.posts.edit_post', compact('posts'));
    }
    public function update_post(Request $request , $id){
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
        return redirect()->back()->with('message', 'Updated Successfully');
    }
    public function accept_user_post($id){
        $post = Post::findOrFail($id);
        $post->post_status = 'active';
        $post->save();

        return redirect()->back()->with('status_accept', 'Post Accepted');
    }
    public function reject_user_post($id){
        $post = Post::findOrFail($id);
        $post->post_status = 'pending';
        $post->save();
        return redirect()->back()->with('status_reject', 'Post Rejected');
    }

    // Category Work---------------------------------------}}
    public function create_cat(){
        $cat = Category::all();
        return view('admin.categories.create_cat', compact('cat'));
    }
    public function add_category(Request $request){
        $cat = new Category;
        $cat->category_name = $request->category_name;
        $cat->save();

        return redirect()->back();
    }
    public function show_category(){
        $cat = Category::all();
        return view('admin.categories.create_cat', compact('cat'));
    }
    public function delete_cat($id){
        $cat = Category::where('id', $id)->delete();
        // $cat = Category::findOrFail($id)->delete();
        return redirect()->back() ;
    }
    public function edit_cat($id){
        $cat = Category::findOrFail($id);
        return view('admin.categories.edit_cat', compact('cat'));
    }
    public function update_cat(Request $request, $id){
        $cat = Category::findOrFail($id);
        $cat->category_name = $request->category_name;
        $cat->save();
        return redirect()->back() ;

    }

    // Category Work---------------------------------------}}
    public function create_product(){
        $cat = Category::all();
        return view('admin.products.create_product', compact('cat'));
    }
}
