<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return 'index';
    }
    public function create(){
        return 'create';
    }
    public function store(){
        return 'store';
    }
    public function show(){
        return 'show';
    }
    public function edit(){
        return 'edit';
    }
    public function update(){
        return 'update';
    }
    public function destroy(){
        return 'destroy';
    }
    public function like(){
        return 'like';
    }
}
