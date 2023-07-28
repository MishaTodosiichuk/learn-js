<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'active', 'admin'])->prefix('admin')->as('admin.')->group(function () {

    Route::redirect('/', 'admin/posts')->name('admin');


    Route::resource('posts', PostController::class);

    Route::put('posts/{post}', [PostController::class, 'like'])->name('posts.like');

    Route::resource('posts/{post}/comments', CommentController::class);
});
