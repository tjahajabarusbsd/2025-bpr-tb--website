<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->where('is_published', true)->paginate(10);
        return view('post.index', compact('posts'));
    }

    public function category($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $posts = $category->posts()
            ->where('is_published', true)
            ->latest()
            ->paginate(10);

        return view('post.category', compact('category', 'posts'));
    }

    public function show($categorySlug, $postSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $post = Post::where('slug', $postSlug)
            ->where('category_id', $category->id) // pastikan slug post sesuai kategorinya
            ->firstOrFail();

        return view('post.show', compact('category', 'post'));
    }

}
