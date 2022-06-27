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
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('posts');
});

Route::get('post', function () {
    return view('post');
});


//<a href="/posts/1/2/3">First Post etc</a>
// Route::get ('post/{post}', function ($slug) { 
//     return view('post',["slug" => $slug]);
// });