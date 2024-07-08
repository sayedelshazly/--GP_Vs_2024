<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\CategortBook;
use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $users = User::where('usertype', 'user')->get()->count();
        $posts = Post::get()->count();
        $posts_active = Post::where('post_status', 'active')->get()->count();
        $posts_pending = Post::where('post_status', 'pending')->get()->count();

        $products = Product::get()->count();
        $cat = Category::get()->count();

        $order = Order::get()->count();
        $order_onTheWay = Order::where('status', 'onTheWay')->get()->count();
        return view('admin.index', compact('users', 'posts', 'products', 'cat', 'posts_active', 'posts_pending', 'order', 'order_onTheWay'));
        }
    }
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
        $order = Order::findOrFail($id);
        $order->status = 'OnTheWay';
        $order->save();
        return redirect()->back()->with('status_accept', 'Order OnThe Way');
    }
    public function status_delivered($id){
        $order = Order::findOrFail($id);
        $order->status = 'Delivered';
        $order->save();
        return redirect()->back()->with('status_reject', 'Order Delivered');
    }
    // _____________________________print and download PDF
    public function print_pdf($id){
        $order = Order::findOrFail($id);
        $pdf = Pdf::loadView('admin.pdf.invoice', compact('order'));
        return $pdf->download('Order.pdf');
    }
    // __________________________________category for book
    // public function create_cat_book(){
    //     $cat_book = CategortBook::all();
    //     return view('admin.categories_book.create_cat_book', compact('cat_book'));
    // }
    // public function add_category_book(Request $request){
    //     $cat_book = new CategortBook();
    //     $cat_book->category_title = $request->category_title;
    //     $cat_book->save();

    //     return redirect()->back();
    // }
    // public function show_category_book(){
    //     $cat_book = CategortBook::all();
    //     return view('admin.categories_book.create_cat_book', compact('cat_book'));
    // }
    // public function delete_cat_book($id){
    //     $cat_book = CategortBook::where('id', $id)->delete();
    //     // $cat = Category::findOrFail($id)->delete();
    //     return redirect()->back() ;
    // }
    // public function edit_cat_book($id){
    //     $cat_book = CategortBook::findOrFail($id);
    //     return view('admin.categories_book.edit_category_book', compact('cat_book'));
    // }
    // public function update_cat_book(Request $request, $id){
    //     $cat_book = CategortBook::findOrFail($id);
    //     $cat_book->category_title = $request->category_title;
    //     $cat_book->save();
    //     return redirect()->back() ;

    // }
// _________________________________Books

public function create_book(){
    $cat = Category::all();
    return view('admin.books.create_book', compact('cat'));

}
public function store_book(Request $request){
    $book = new Book;
    $book->title_book = $request->title_book;
    $book->author_name = $request->author_name;
    $book->description_book = $request->description_book;
    $book->price = $request->price;
    $book->quantity = $request->quantity;
    $book->category_id = $request->category;

    $image = $request->book_img;
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('bookImages', $imageName);
            $book->book_img = $imageName;
        }

    $book->save();
    return redirect()->back();

}
public function show_books(){
    $book = Book::all();
    return view('admin.books.allBooks', compact('book'));
}
public function delete_book($id){
    Book::where('id', $id)->delete();
    return redirect()->back();
}
public function edit_book($id){
    $cat = Category::all();
    $book = Book::findOrFail($id);
    return view('admin.books.edit_book', compact('book', 'cat'));
}
public function update_book(Request $request, $id){
    $book = Book::findOrFail($id);
    $book->title_book = $request->title_book;
    $book->author_name = $request->author_name;
    $book->description_book = $request->description_book;
    $book->price = $request->price;
    $book->quantity = $request->quantity;
    $book->category_id = $request->category;

    $image = $request->book_img;
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('bookImages', $imageName);
            $book->book_img = $imageName;
        }

    $book->save();
    return redirect()->back();

}
public function borrow_requests(){
    $borrow = Borrow::all();
    return view('admin.books.borrow_requests', compact('borrow'));
}
public function ApproveRequest($id){
    $borrow = Borrow::findOrFail($id);
    $borrow->status = 'Approved';
    $borrow->save();
    
    $book_id = $borrow->book_id;
    $book = Book::findOrFail($book_id);
    $book_quantity = $book->quantity - 1;
    $book->quantity = $book_quantity;
    dd($book_quantity);
    
    // $borrow->save();

    // return redirect()->back();
}
public function RejectRequest($id){
    $borrow = Borrow::findOrFail($id);
    $borrow->status = 'Rejected';
    $borrow->save();
    return redirect()->back();
}
public function ReturnRequest($id){
    $borrow = Borrow::findOrFail($id);
    $borrow->status = 'Approved';
    $borrow->save();
    return redirect()->back();
}


}
