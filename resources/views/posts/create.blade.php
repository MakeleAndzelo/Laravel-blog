@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="eight columns offset-by-two">
			{{ Form::open(['action' => 'PostsController@store']) }}
				@include("posts._form", ['button' => 'Add Post'])
			{{ Form::close() }}
		</div>
	</div>
@endsection

@section('title')
	<h3>Create post</h3>
@endsection