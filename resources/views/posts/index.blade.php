@extends('layouts.master')

@section('title')
	<title>Grim's Blog | Home</title>
@stop

@section('content')
	<section class="jumbotron">
		<h1>Grim's Blog</h1>
	</section>
	<section class="col-sm-7 panel panel-primary nopadding">
		<section class="panel-heading">
			<h1>Feed</h1>
		</section>
		<section class="panel-body posts">
			<?php foreach($posts as $post): ?>
				<h1><a href="/post/{{ $post['id'] }}">{{ $post['title'] }}</a></h1>
				<p>{{ $post['user']['name'] }}</p>
				<p>{{ $post['content'] }}</p>
			<?php endforeach; ?>
		</section>
	</section>
	<section class="col-sm-4 col-sm-offset-1 panel-primary nopadding">
		<section class="panel-heading">
			<h1>Trending</h1>
		</section>
	</section>
@stop
