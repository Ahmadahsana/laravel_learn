<?php

use App\Http\Controllers\ListWebController;
use App\Http\Controllers\PostController;
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
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landing', [
        'title' => 'home'
    ]);
});
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

Route::get('/posts', [PostController::class, 'index'], [ListWebController::class, 'index']);

Route::get('/list', [ListWebController::class, 'index']);

// singgle post
Route::get('posts/{post}', [PostController::class, 'show']);
