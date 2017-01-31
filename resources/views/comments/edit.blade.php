@extends('layouts.app')

@section('content')
	<h3>Edit a comment</h3>
	{{ Form::model($comment, ['action' => ['CommentsController@update', $post->id, $comment->id], 'method' => 'PATCH']) }}
		@include('comments._form', ['button' => 'Edit comment'])
	{{ Form::close() }}
@endsection

@section('title')
	<h3>Edit comment</h3>
@endsection