@extends('layouts.master')

@section('title')
	<title>Find a Post</title>
@stop

@section('content')
	<h1>Find a Post</h1>
	<h2>{{ $post['title']</h2>
	<p>{{ $post['content'] }}</p>
@stop
