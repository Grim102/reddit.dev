@extends('layouts.master')

@section('title')
	<title>Random Thoughts</title>
@stop

@section('content')
	<section class="jumbotron">
		<h1>Random Thoughts</h1>
	</section>
	<section class="col-sm-7 nopadding">
			<?php foreach($posts as $post): ?>
				<a href="/post/{{ $post['id'] }}" class="post-link"><section class="well post-link">
					<h1>{{ $post['title'] }}</h1>
					<p class="name-date">{{ $post['user']['name'] }}</p>
					<p class="name-date">{{ $post['created_at'] }}</p>
					<p>{{ $post['abstract'] }}</p>
				</section></a>
			<?php endforeach; ?>
		<section class="text-center">
				{!! $posts->render() !!}
		</section>
	</section>
	<section class="col-sm-4 col-sm-offset-1 panel-primary nopadding">
		<section class="panel-heading">
			<h1>Trending</h1>
		</section>
		<section class="panel-body">
			<?php foreach($trends as $trend): ?>
				<p><a href="/posts?q={{$trend}}">{{ $trend }}</a></p>
			<?php endforeach; ?>
		</section>
	</section>
@stop
