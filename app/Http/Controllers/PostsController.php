<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update']);
    }

    public function index()
    {
    	$posts = Post::orderBy('created_at', 'DESC')->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(PostsRequest $request)
    {
    	$post = Auth::user()->posts()->create($request->all());

    	return redirect(route('posts.show', $post->id));
    }

    public function edit(Post $post)
    {
    	return view('posts.edit', compact('post'));
    }

    public function update(PostsRequest $request, Post $post)
    {
    	$post->update($request->all());

    	return redirect(route('posts.show', $post->id));
    }

    public function destroy(Post $post)
    {
    	$post->delete();

    	return redirect('/');
    }
}
