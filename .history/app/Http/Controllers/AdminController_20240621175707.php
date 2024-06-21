<?php

namespace App\Http\Controllers;

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
        $post = Post::findOrFail('id', $id);
        $post

    }
}
