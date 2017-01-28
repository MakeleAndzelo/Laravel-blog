@extends('layouts.app')

@section('content')
	<article class="post show-post">
		<header><h2>{{$post->title}}</h2></header>
		<small>Created {{$post->created_at->diffForHumans() }} </small>
		<p>{{$post->body}}</p>
		<footer>
			<div class="row">
				<div class="btn-group u-pull-right">
					<a href="{{ action('PostsController@edit', $post->id)}} " class="button button-primary">Edit</a>
					{{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) }}
						{{Form::submit('Delete')}}
					{{ Form::close() }}
				</div>
			</div>
		</footer>
	</article>
@endsection

@section('title')
	<h3>Post</h3>
@endsection