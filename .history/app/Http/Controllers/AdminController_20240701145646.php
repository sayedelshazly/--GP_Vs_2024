<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    
    public function post_page(){
        return view('admin.posts.post_page');
    }
    //add new Post
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
        $posts = Post::orderBy('created_at', 'desc')->get();
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
    public function add_product(Request $request){
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        $image = $request->image;
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('productImages', $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->back()->with('message', 'Product Added Successfully!');
    }
    public function show_products(){
        $product = Product::all();
        return view('admin.products.show_products', compact('product'));
    }
    public function delete_products($id){
        $product = Product::findOrFail($id)->delete();
        
        return redirect()->back()->with('message', 'Product Deleted Successfully!');
    }
    public function edit_products($id){
        $cat = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit_products', compact('product', 'cat'));
    }
    public function update_products(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        $image = $request->image;
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('productImages', $imageName);
            $product->image = $imageName;
        }
            
        $product->save();
        return redirect()->back()->with('message', 'Product Updated Successfully!');
    }
    public function search_products(Request $request){
        $search = $request->search;
        $product = Product::where('title', 'LIKE', '%'.$search.'%')->get();
        return view('admin.products.show_products', compact('product'));
        
    }
    public function search_posts(Request $request){
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->get();
        return view('admin.posts.show_posts', compact('posts'));
        
    }
    public function search_categories(Request $request){
        $search = $request->search;
        $cat = Category::where('category_name', 'LIKE', '%'.$search.'%')->get();
        return view('admin.categories.create_cat', compact('cat'));
        
    }
    // cart ->> orders
    public function show_orders(){
        $order = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orders.cart_order', compact('order'));
        
    }
    public function search_order(Request $request){
        $search = $request->search;
        $order = Order::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('admin.orders.cart_order', compact('order'));
        
    }
    public function status_onWay($id){
        $post = Order::findOrFail($id);
        $post->sta = 'active';
        $post->save();

        return redirect()->back()->with('status_accept', 'Post Accepted');
    }
    public function reject_user_post($id){
        $post = Post::findOrFail($id);
        $post->post_status = 'pending';
        $post->save();
        return redirect()->back()->with('status_reject', 'Post Rejected');
    }
}
