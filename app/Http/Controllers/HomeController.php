<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->where('is_published', true)->take(4)->get();
        return view('home', compact('posts'));
    }
}
