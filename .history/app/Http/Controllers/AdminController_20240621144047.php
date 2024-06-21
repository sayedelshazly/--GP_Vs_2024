<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function post_page(){
        return view('admin.posts.post_page');
    }
    public function add_post(Request $request){
        
        $user = Auth()->user();

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
        $post->save();

        return redirect()->back();
    }
}
