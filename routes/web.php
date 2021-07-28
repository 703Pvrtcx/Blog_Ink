<?php

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
    using key value pairs
    Route::get('/post', function () {
    return view('post', [
        'title' => 'Innocent Ndhlovu',
        'post' => 'About post',
    ]
);
});

Route::get('/post', function () {
    $post = file_get_contents(__DIR__ .'/../resources/posts/my-first-post.html');
    return view('post', [
      'post' => $post,
      'title' => 'First post'
    ]
);
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/posts/{post}', function ($slug) {
    return $slug;
});


