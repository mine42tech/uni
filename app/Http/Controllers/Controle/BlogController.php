<?php

namespace App\Http\Controllers\Controle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index ()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('controle.blog.index', compact('posts'));
    }
}

