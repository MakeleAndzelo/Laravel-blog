@extends('layouts.app')

@section('content')
	<article class="post show-post">
		<header><h2>{{$post->title}}</h2></header>
		<small>Created {{$post->created_at->diffForHumans() }} </small>
		<p>{{$post->body}}</p>
		<footer>
			<div class="row">
				@if (Auth::user())
					<div class="btn-group u-pull-right">
						<a href="{{ action('PostsController@edit', $post->id)}} " class="button button-primary">Edit</a>
						{{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) }}
							{{Form::submit('Delete')}}
						{{ Form::close() }}
					</div>
				@endif
			</div>
		</footer>
	</article>
	<strong>{{ $post->comments->count() }} {{ str_plural('Comment', $post->comments->count()) }}</strong>
	<hr>
	{{ Form::open(['action' => ['CommentsController@store', $post->id], 'method' => 'POST']) }}
		@include('comments._form', ['button' => 'Add comment'])
	{{ Form::close() }}
	<hr>
	<section id="comments" class="u-cf">
		@foreach($post->comments as $comment)
			<div class="comment u-pull-left u-full-width">
				<small>Created {{ $comment->created_at->diffForHumans() }} </small>
				<p>{{ $comment->body }}</p>
				<hr>
				@if(Auth::user())
					<div class="btn-group u-pull-right">
						<a href="{{ action('CommentsController@edit', [$post->id, $comment->id])}}" class="button">Edit</a>
						{{ Form::open(['action' => ['CommentsController@destroy', $post->id, $comment->id], 'method' => 'DELETE']) }}
							{{ Form::submit('Delete') }}
						{{ Form::close() }}
					</div>
				@endif
			</div>
		@endforeach
	</section>
@endsection

@section('title')
	<h3>Post</h3>
@endsection