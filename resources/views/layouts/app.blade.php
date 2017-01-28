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
					<li><a href="http://">Email</a></li>
				</ul>
			</nav>
		</section>
		<section id="content">
			<header class="content-header">
				@yield('title')
				<div class="btn-group">
					<a href="{{ action("PostsController@create") }}" class="button u-pull-right">New post</a>
				</div>
			</header>
			@yield('content')
		</section>
	</div>
</body>
</html>