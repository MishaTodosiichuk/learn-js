<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->group(function (){

    Route::resource('posts',PostController::class);

    Route::put('posts/{post}', [PostController::class, 'like'])->name('posts.like');

    Route::resource('posts/{post}/comments', CommentController::class);
});
