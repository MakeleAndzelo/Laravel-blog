@extends('layouts.app')

@section('content')
	@foreach ($posts as $post)
		<article class="post">
			<header>
				<a href="{{ action('PostsController@show', $post->id) }}"><h3>{{ $post->title }}</h3></a>
			</header>
			<small>Created {{ $post->created_at->diffForHumans() }} by Chaysik</small>
		</article>
		<hr>
	@endforeach
@endsection

@section('title')
	<h3>Blog</h3>
@endsection