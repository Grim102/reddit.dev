
@extends('layouts.master')

@section('title')
	<title>Post # {{ $post['id'] }}</title>
@stop

@section('content')
	<section class="jumbotron">
		<h1>{{ $post['title'] }}</h1>
	</section>
	<section class="col-sm-12 nopadding">
		<section>
			<p class="name-date">{{ $post['user']['name'] }}</p>
			<p class="name-date">{{ $post['created_at'] }}</p>
			<section id="blog-post">{!! $post['content'] !!}</section>
		</section>
	</section>
@stop
