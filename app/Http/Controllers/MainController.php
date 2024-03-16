<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::first()->paginate(30);


        return view('main', ['posts' => $posts]);
    }
}
