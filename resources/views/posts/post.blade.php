
@extends('layouts.master')

@section('title')
	<title>{{ $post['user']['name'] }}'s Thoughts</title>
@stop

@section('content')
	<section class="jumbotron">
		<h1>{{ $post['title'] }}</h1>
	</section>
	<section class="col-sm-12">
		<section>
			<p class="name-date">{{ $post['user']['name'] }}</p>
			<p class="name-date">{{ $post['created_at'] }}</p>
			<section id="blog-post">{!! $post['content'] !!}</section>
		</section>
	</section>
@stop
