<?php

use App\Http\Controllers\ListWebController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\list_web;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('landing', [
//         'title' => 'home'
//     ]);
// });

Route::get('/', [ListWebController::class, 'index']);

Route::get('/landing', function () {
    return view('landing', [
        'title' => 'landing'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'nama' => 'ini EDP boss',
        'slogan' => 'electronik data processing'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/list', [ListWebController::class, 'index']);

// singgle post
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Post in category ' . $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post category',
        'categories' => Category::all()
    ]);
});

Route::get('/author/{user:name}', function (User $user) {
    return view('posts', [
        'title' => 'Autor by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        'title' => 'Admin'
    ]);
});

Route::get('/adminlistweb', function () {
    return view('adminlistweb', [
        'title' => 'List web',
        'list' => list_web::all()
    ]);
});

Route::get('/editweb/{listweb:id}', function () {
    return view('adminlistweb', [
        'title' => 'List web',
        'list' => list_web::all()
    ]);
});
