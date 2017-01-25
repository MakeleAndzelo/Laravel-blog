<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all()->orderBy("created_at", "DESC");

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

    public function store(Request $request)
    {
    	$post = Post::create($request->all());

    	return redirect(route('posts.show', $post->id));
    }

    public function edit(Post $post)
    {
    	return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
    	$post->update($request->all());

    	return redirect(route('posts.show', $post->id));
    }

    public function destroy()
    {
    	$post->delete();

    	return redirect('/');
    }
}
