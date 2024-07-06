<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $posts = Post::latest()->take(8)->where('post_status', 'active')->get(); //--Error 2
            $product = Product::latest()->take(3)->get();
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('layouts.Front.home', compact('posts', 'product'));
            }else if($usertype == 'admin'){
                return view('admin.index');
            }else{
                return redirect()->back();
            }
        }
        return view('layouts.Front.home', compact('product', 'posts', 'count'));
    }

    public function showAllPosts(){
        $posts = Post::where('post_status', 'active')->get();
        return view('layouts.Front.posts.allPosts', compact('posts'));
    }
    public function home(){
        $posts = Post::latest()->take(8)->where('post_status', 'active')->get();
        $product = Product::latest()->take(3)->get();
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
        Session::flash('success', 'Post Created successfully!');

        return redirect()->back();
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
        Session::flash('success', 'Post Updated successfully!');
        return redirect()->back();
    }
    // products
    // public function show_Products(){
    //     $product = Product::all();
    //     return view('layouts.Front.portfolio', compact('product'));
    // }
    public function show_allProducts(){
        $product = Product::all();
        $user=Auth()->user();
        $user_id = $user->id;
        $count = Cart::where('user_id', $user_id)->count();
        return view('layouts.Front.products.show_allProducts', compact('product', 'count'));
    }
    public function show_oneProduct($id){
        $product = Product::findOrFail($id);
        return view('layouts.Front.products.show_oneProduct', compact('product'));
    }
    
    public function add_toChart($id){
        $product_id = $id;
        $user = Auth()->user();
        $user_id = $user->id;

        $chart = new Cart;
        $chart->user_id = $user_id;
        $chart->product_id = $product_id;
        $chart->save();

        Session::flash('success', 'Product Added successfully!');
        return redirect()->back();
    }
    public function myCart(){
        $user_id = Auth()->user()->id;
        $cart = Cart::where('user_id', $user_id)->get();
        return view('layouts.Front.myCart', compact('cart'));
    }
    public function delete_fromCart(){
        $user_id = Auth()->user()->id;
        $cart = Cart::where('user_id', $user_id)->delete();
        return redirect()->back();
    }
    public function confirm_order(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;

        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->get();
        foreach ($cart as $cart) {
            
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->name = $name;
            $order->phone = $phone;
            $order->rec_address = $address;
            $order->user_id = $user_id;
            
            $order->save();
        }
        $cart_remove = Cart::where('user_id', $user_id)->get();
        foreach ($cart_remove as $cart_remove) {
            $data = Cart::findOrFail($cart_remove->id);
            $data->delete();
        }
        Session::flash('success', 'Ordered successfully!');
        return redirect()->back();
    }
    // order_show in home
    public function my_orders(){
        $user = Auth::user()->id;
        $order = Order::where('user_id', $user)->get();
        return view('layouts.Front.my_order', compact('order') );
    }
    public function stripe($value)
    {
        return view('layouts.Front.stripe', compact('value'));
    }
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
    
        $name = Auth::user()->name;
        $phone = $request->phone;
        $address = $request->address;

        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->get();
        foreach ($cart as $cart) {
            
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->name = $name;
            $order->phone = $phone;
            $order->rec_address = $address;
            $order->user_id = $user_id;
            $order->payment_status = 'paid';
            
            $order->save();
        }
        $cart_remove = Cart::where('user_id', $user_id)->get();

        foreach ($cart_remove as $cart_remove) {
            $data = Cart::findOrFail($cart_remove->id);
            $data->delete();
        }
        Session::flash('success', 'Payment successful!');
        return redirect()->back();
    }
    public function my_books(){
        $book = Book::all();
        return view('layouts.Front.my_books', compact('book'));
    }
    public function borrow_book($id){
        $book=Book::find($id);
        $book_id = $id;
        $quantity= $book->quantity;
        
        if( $quantity >= '1')
        {
            if(Auth::id()) {
                $user_id=Auth()->user()->id;
                Borrow::create([
                    'user_id' => $user_id,
                    'book_id' => $book_id,
                    'status' => 'applied'
                ]);
                return redirect()->back()->with('message', "A request is sending to admin to borrow this book");  
            }
            else{

                return redirect()->route('login');
            }

          }
          else
          {
             return redirect()->back()->with('message', "Not enough book Available");

          }
    }
}