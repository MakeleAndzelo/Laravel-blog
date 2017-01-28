@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="eight columns offset-by-two">
			<h1>Create a new post</h1>

			{{ Form::open(['action' => 'PostsController@store']) }}
				@include("posts._form")
			{{ Form::close() }}
		</div>
	</div>
@endsection