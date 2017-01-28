@extends('layouts.app')

@section('content')
	<div class="post-form">
		<div class="container">
			<div class="eight columns offset-by-two">
				{{Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PATCH'])}}
					@include('posts._form', ['button' => 'Edit post'])
				{{Form::close()}}
			</div>
		</div>
	</div>
@endsection

@section('title')
	<h3>Edit post</h3>
@endsection