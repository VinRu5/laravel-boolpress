<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        $datePost = new Carbon($post->created_at);
        return view('showhome', compact('post', 'datePost'));
    }
}
