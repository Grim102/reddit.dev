<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('title')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="">
</head>
<body>
@if (Auth::check())
<nav class="navbar navbar-default">
	<section class="container-fluid">
	<section class="navbar-header">
		<a href="/posts" class="navbar-brand">Reddit Clone</a>
	</section>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="{{ action('PostsController@index') }}">Posts</a></li>
		<li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
		<li><a href="/auth/logout">Logout</a></li>
	</ul>
	</section>
</nav>
@else
<nav class="navbar navbar-default">
	<section class="container-fluid">
	<section class="navbar-header">
		<a href="/posts" class="navbar-brand">Reddit Clone</a>
	</section>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="/auth/register">Register</a></li>
		<li><a href="/auth/login">Login</a></li>
	</ul>
	</section>
</nav>
@endif
	@yield('content')
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src=""></script>
</body>
</html>
