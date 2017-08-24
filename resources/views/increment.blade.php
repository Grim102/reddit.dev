@extends('layouts.master')

@section('title')
	<title>Increment</title>
@endsection

@section('content')
<div class="jumbotron text-center">
	<h1>{{ $num }}</h1>
<h2><a href="{{ action('HomeController@increment', array($num))  }}">Increment</a></h2>
</div>
@endsection
