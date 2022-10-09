<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'DESC')->where('active', 1)->get();

        return view('site.blog.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $otherPosts = Post::where('slug', '!=', $post->slug)->take(4)->orderBy('published_at', 'DESC')->get();

        return view('site.blog.blog-post', compact('post', 'otherPosts'));
    }
}
