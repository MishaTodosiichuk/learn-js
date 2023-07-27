<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');

Route::redirect('/home', '/');

Route::get('test', TestController::class);

//CRUD (create, read, update, delete)

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');

Route::put('posts/{post}', [PostController::class, 'like'])->name('posts.like');




//В самому низу

/*Route::fallback(function (){
    return 'Fallback';
});*/
