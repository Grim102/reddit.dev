<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('title')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css">
	<link href="//cdn.quilljs.com/1.3.1/quill.snow.css" rel="stylesheet">
	<link href="/assets/css/main.css" rel="stylesheet" type="text/css" >
	<script src="/src/js/vendor/tinymce/js/tinymce/tinymce.min.js"></script>
</head>
<body>
<section id="wrapper">
<nav class="navbar navbar-default">
	<section class="container">
	<section class="row">
	<section class="col-lg-12">
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
	</section>
	</section>
</nav>
<main class="container">
	<section class="row">
	@yield('content')
	</section>
</main>
</section>
<footer class="footer well">
	<section class="container">
		<section class="row">
		<section class="col-sm-6">
			<a href="/about">About</a>
			<a href="https://github.com/Grim102/reddit.dev" target="blank">Github</a><br>
			Random Thoughts is a free and open source blog site created by 
			<a href="https://github.com/Grim102" target="blank">Alex Endacott</a>
		</section>
		</section>
	</section>
</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.quilljs.com/1.3.1/quill.min.js"></script>
	<script src="/assets/js/main.js"></script>
</body>
</html>
