<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('title')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
	<!-- <link rel="stylesheet" href=""> -->
	<link href="/assets/css/main.css" rel="stylesheet" type="text/css" >
</head>
<body>
<nav class="navbar navbar-default">
	<section class="container-fluid">
	<section class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
		<a href="/posts" class="navbar-brand">Home</a>
	</section>
	<section class="collapse navbar-collapse" id="navbar">
		<form method="GET" action="{{ action('PostsController@index') }}" class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" class="form-control" name="q" placeholder="Search">
			</div>
			<button class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			@if (Auth::check())
			<li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
			<li><a href="/auth/logout">Logout</a></li>
			@else
			<li><a href="/auth/register">Register</a></li>
			<li><a href="/auth/login">Login</a></li>
			@endif
		</ul>
	</section>
	</section>
</nav>
<main class="container">
	<section class="row">
	@yield('content')
	</section>
</main>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src=""></script>
</body>
</html>
