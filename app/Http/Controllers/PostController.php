<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLoggedID = Auth::id();
        $posts = Post::where('user_id', $userLoggedID)->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showURL = url()->current();
        $categories = Category::all();
        return view('posts.form', compact('showURL', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validationForm($request);

        $data = $request->all();

        $newPost = new Post;
        $newPost->title_post = $data['title_post'];
        $newPost->author = Auth::user()->name;
        $newPost->text = $data['text'];
        $newPost->photo = $data['photo'];
        $newPost->category_id = $data['category_id'];
        $newPost->save();

        return redirect()->route('posts.show', ['post' => $newPost->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$postToShow = Post::find($id);
        $datePost = new Carbon($post->created_at);

        return view('posts.show', compact('post', 'datePost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $showURL = url()->current();
        $categories = Category::all();

        return view('posts.form', compact('post', 'showURL', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validationForm($request);
        $data = $request->all();

        $post->update($data);

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    private function validationForm($request) {
        $request->validate([
            'title_post' => 'required|max:255',
            'text' => 'required',
            'photo' => 'nullable|url',
            'category_id' => 'required'
        ]);
    }
}
