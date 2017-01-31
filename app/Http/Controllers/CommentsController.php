<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->only(['edit, update, destroy']);
	}

    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

    	$comment = new Comment;

    	$comment->body = $request->input('body');
    	$comment->user_id = Auth::id();
    	$comment->post_id = $post->id;

    	$comment->save();

    	return redirect(route('posts.show', $post->id));
    }

    public function edit(Post $post, Comment $comment)
    {
    	return view('comments.edit', compact('comment', 'post'));
    }

    public function update(Request $request, Post $post, Comment $comment)
    {
    	$comment->update($request->all());

    	return redirect(route('posts.show', $post->id));
    }

    public function destroy(Post $post, Comment $comment)
    {
    	$comment->delete();

    	return redirect()->back();
    }
}
