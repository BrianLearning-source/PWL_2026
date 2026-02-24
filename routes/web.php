<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\index;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use Termwind\Components\Raw;

//Basic Routing directly in web

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'welcome';
});

Route::get('/about', function () {
    return '244107020035 - Brian Serafino Donovan';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $CommentId) {
    return 'Post to '.$postId." Comments to: ".$CommentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Article Page with ID {$id}";
});

Route::get('/user/{name?}', function ($name ='John') {
    return 'Nama saya '.$name;
});

// Entering Routing base on Controller

Route::get('/hello', [WelcomeController::class,'hello']);

//Routing to the controller named PageController 

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

//Routing to the SInge Action Controller

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);