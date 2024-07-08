<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('home', [HomeController::class, 'index'])
->name('home')
->middleware('auth');

Route::get('/', [HomeController::class, 'home'] );
Route::get('showAllPosts', [HomeController::class, 'showAllPosts'] )->middleware('auth');
Route::get('showOnePost/{id}', [HomeController::class, 'showOnePost'] )->middleware('auth');
// user create post
Route::get('create_post', [HomeController::class, 'create_post'])->middleware('auth');
Route::post('user_post', [HomeController::class, 'user_post'])->middleware('auth');
Route::get('user_allPosts', [HomeController::class, 'user_allPosts'])->middleware('auth')->name('allPosts');
Route::get('user_onePost/{id}', [HomeController::class, 'user_onePost'])->middleware('auth');
Route::delete('delete_user_post/{id}', [HomeController::class, 'delete_user_post'])->middleware('auth');
Route::get('edit_user_post/{id}', [HomeController::class, 'edit_user_post'])->middleware('auth');
Route::post('update_user_post/{id}', [HomeController::class, 'update_user_post'])->middleware('auth');
// products
Route::get('show_Products', [HomeController::class, 'show_Products'])->middleware('auth');
Route::get('show_allProducts', [HomeController::class, 'show_allProducts'])->middleware('auth');
Route::get('show_oneProduct/{id}', [HomeController::class, 'show_oneProduct'])->middleware('auth');
// Cart
Route::get('add_toChart/{id}', [HomeController::class, 'add_toChart'])->middleware('auth');
Route::get('myCart', [HomeController::class, 'myCart'])->middleware('auth');
Route::delete('delete_fromCart/{id}', [HomeController::class, 'delete_fromCart'])->middleware('auth');
Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware('auth');
// order
Route::get('my_orders', [HomeController::class, 'my_orders'])->middleware('auth');
Route::controller(HomeController::class)->group(function(){
    Route::get('stripe/{value}', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
// books
Route::get('my_books', [HomeController::class, 'my_books'])->middleware('auth');
Route::get('borrow_book/{id}', [HomeController::class, 'borrow_book'])->middleware('auth');
Route::get('book_history', [HomeController::class, 'book_history'])->middleware('auth');
Route::get('cancel_request/{id}', [HomeController::class, 'cancel_request'])->middleware('auth');
// Courses

Route::get('upload_course', [HomeController::class, 'upload_course'])->middleware('auth');
Route::get('_course', [HomeController::class, 'upload_course'])->middleware('auth');




Route::get('/roadmap/{page}', function ($page) {
    $pages = ['page', 'page1', 'page2', 'page3', 'page4', 'page5'];
    if (!in_array($page, $pages)) {
        abort(404);
    }
    return view('layouts.Front.roadmap.' . $page);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('home', [AdminController::class, 'index'])->name('home')->middleware('auth');
Route::get('post_page', [AdminController::class, 'post_page']);
Route::post('add_post', [AdminController::class, 'add_post']);
Route::get('show_posts', [AdminController::class, 'show_posts']);
Route::get('edit_post/{id}', [AdminController::class, 'edit_post']);
Route::post('update_post/{id}', [AdminController::class, 'update_post']);
Route::delete('delete_post/{id}', [AdminController::class, 'delete_post']);
// user post
Route::get('accept_user_post/{id}', [AdminController::class, 'accept_user_post']);
Route::get('reject_user_post/{id}', [AdminController::class, 'reject_user_post']);
// Category Work ------------------------------
Route::get('create_cat', [AdminController::class, 'create_cat']);
Route::post('add_category', [AdminController::class, 'add_category']);
Route::get('show_category', [AdminController::class, 'show_category']);
// Route::get('delete_cat/{id}', [AdminController::class, 'delete_cat']);
Route::delete('delete_cat/{id}', [AdminController::class, 'delete_cat']);
Route::get('edit_cat/{id}', [AdminController::class, 'edit_cat']);
Route::post('update_cat/{id}', [AdminController::class, 'update_cat']);
// Category Work ------------------------------
Route::get('create_product', [AdminController::class, 'create_product']);
Route::post('add_product', [AdminController::class, 'add_product']);
Route::get('show_products', [AdminController::class, 'show_products']);
Route::get('delete_products/{id}', [AdminController::class, 'delete_products']);
Route::get('edit_products/{id}', [AdminController::class, 'edit_products']);
Route::post('update_products/{id}', [AdminController::class, 'update_products']);
Route::get('search_products', [AdminController::class, 'search_products']);
Route::get('search_posts', [AdminController::class, 'search_posts']);
Route::get('search_categories', [AdminController::class, 'search_categories']);
Route::get('search_categories', [AdminController::class, 'search_categories']); 
// cart-> orders
Route::get('show_orders', [AdminController::class, 'show_orders']); 
Route::get('search_order', [AdminController::class, 'search_order']); 
Route::get('status_onWay/{id}', [AdminController::class, 'status_onWay']);
Route::get('status_onWay/{id}', [AdminController::class, 'status_onWay']);
Route::get('status_delivered/{id}', [AdminController::class, 'status_delivered']);


Route::get('print_pdf/{id}', [AdminController::class, 'print_pdf']);

// Category Work ------------------------------
// Route::get('create_cat_book', [AdminController::class, 'create_cat_book']);
// Route::post('add_category_book', [AdminController::class, 'add_category_book']);
// Route::get('show_category_book', [AdminController::class, 'show_category_book']);
// // Route::get('delete_cat/{id}', [AdminController::class, 'delete_cat']);
// Route::delete('delete_cat_book/{id}', [AdminController::class, 'delete_cat_book']);
// Route::get('edit_cat_book/{id}', [AdminController::class, 'edit_cat_book']);
// Route::post('update_cat_book/{id}', [AdminController::class, 'update_cat_book']);

// ____________________________________________Books

Route::get('create_book', [AdminController::class, 'create_book']);
Route::post('store_book', [AdminController::class, 'store_book']);
Route::get('show_books', [AdminController::class, 'show_books']);
Route::delete('delete_book/{id}', [AdminController::class, 'delete_book']);
Route::get('edit_book/{id}', [AdminController::class, 'edit_book']);
Route::post('update_book/{id}', [AdminController::class, 'update_book']);
Route::get('borrow_requests', [AdminController::class, 'borrow_requests']);
Route::get('ApproveRequest/{id}', [AdminController::class, 'ApproveRequest']);
Route::get('RejectRequest/{id}', [AdminController::class, 'RejectRequest']);
Route::get('ReturnRequest/{id}', [AdminController::class, 'ReturnRequest']);
Route::get('search_book', [AdminController::class, 'search_book']);





require __DIR__.'/auth.php';
