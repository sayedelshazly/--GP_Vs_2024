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
Route::get('user_allPosts', [HomeController::class, 'user_allPosts'])->middleware('auth');
Route::get('user_onePost/{id}', [HomeController::class, 'user_onePost'])->middleware('auth');
Route::get('user_onePost/{id}', [HomeController::class, 'user_onePost'])->middleware('auth');
delete_user_post



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

require __DIR__.'/auth.php';
