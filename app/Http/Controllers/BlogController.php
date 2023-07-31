<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $post = (object)[
            'id' => 1,
            'title' => 'Lorem',
            'content' => 'Lorem content',
         ];
        $posts = array_fill(0,10, $post);
        return view('blog.index', compact('posts'));
    }

    public function show(){
        $post = (object)[
            'id' => 1,
            'title' => 'Lorem',
            'content' => 'Lorem content',
        ];
        return view('blog.show', compact('post'));
    }

    public function like(){
        return 'like';
    }
}
