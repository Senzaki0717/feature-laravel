<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PostsController extends Controller
{ //Q03
    public function index()
    {
        return view("index");
    }
    //Q6
    public function show()
    {
        $title = '詳細画面';
        return view('show', compact('title'));
    }
}
