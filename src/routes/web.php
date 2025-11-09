<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SampleController;
use \App\Http\Controllers\PostsController;

Route::get('/', [SampleController::class, 'home']);

Route::resource('/posts', PostsController::class);

//Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
//Route::get('/posts/:post', [PostsController::class, 'show'])->name('posts.show');
