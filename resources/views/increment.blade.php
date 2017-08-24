@extends('layouts.master')

@section('title')
	<title>Uppercase</title>
@endsection

@section('content')
<div class="jumbotron">
	<h1>{{ $num }}</h1>
</div>
<a href="{{ action('HomeController@increment', array($num))  }}">Increment</a>
@endsection
