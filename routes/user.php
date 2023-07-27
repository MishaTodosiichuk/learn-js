<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->as('user.')->group(function (){
    //CRUD (create, read, update, delete)

    Route::resource('posts',PostController::class);

    //Щоб використати не всі методи можна використати Route::resource('posts',PostController::class)->only(['перелік методів'])

    Route::put('posts/{post}', [PostController::class, 'like'])->name('posts.like');

    Route::resource('posts/{post}/comments', CommentController::class);
});
