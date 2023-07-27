<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return 'index';
    }

    public function show(){
        return 'show';
    }

    public function like(){
        return 'like';
    }
}
