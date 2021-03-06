<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="row u-cl">
		<section id="sidebar"">
			<nav>
				<strong class="nav-title">Website</strong>
				<ul>
					<li><a href="{{ route('posts.index') }}">Blog</a></li>
					<li><a href="{{ action('PagesController@about') }}">About</a></li>
				</ul>
				<strong class="nav-title">Social</strong>
				<ul>
					<li><a href="http://twitter.com">Twitter</a></li>
					<li><a href="http://facebook.com">Facebook</a></li>
					<li><a href="mailto:example@example.pl">Email</a></li>
				</ul>
			</nav>
			<a href="/login" id="admin">Admin login</a>
		</section>
		<section id="content">
			<header class="content-header">
				@yield('title')
				@if (Auth::user())
					<div class="btn-group">
						<a href="{{ action("PostsController@create") }}" class="button u-pull-right">New post</a>
						{{ Form::open(['method' => 'POST', 'route' => 'logout']) }}
							{{ Form::submit('Logout') }}
						{{ Form::close() }}
					</div>
				@endif
			</header>
			<div id="box">
				@yield('content')
			</div>
		</section>
	</div>
</body>
</html>