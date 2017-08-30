@extends('layouts.master')

@section('title')
	<title>All Posts</title>
@stop

@section('content')
	<h1>All Posts</h1>
	<?php foreach($posts as $post): ?>
		<h2>{{ $post['title'] }}</h2>
		<p>By: {{ $post['user']['name'] }} </p>
		<p>{{ $post['content'] }}</p>
	<?php endforeach; ?>
@stop
