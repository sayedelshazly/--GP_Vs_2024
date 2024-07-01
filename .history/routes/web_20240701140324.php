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

Route::get('/', [HomeController::class, 'home'] );
Route::get('showAllPosts', [HomeController::class, 'showAllPosts'] );
Route::get('showOnePost/{id}', [HomeController::class, 'showOnePost'] );
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
Route::get('add_toChart/{id}', [HomeController::class, 'add_toChart'])->middleware('auth');

Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware('auth');

Route::get('/roadmap/{page}', function ($page) {
    $pages = ['page', 'page1', 'page2', 'page3', 'page4', 'page5'];

    if (!in_array($page, $pages)) {
        abort(404); // إذا لم تكن الصفحة موجودة، يتم عرض خطأ 404
    }

    return view('layouts.Front.roadmap.' . $page);
});

Route::get('home', [HomeController::class, 'index'])
->name('home')
->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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




require __DIR__.'/auth.php';
