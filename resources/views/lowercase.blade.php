@extends('layouts.master')

@section('title')
	<title>Lowercase</title>
@endsection

@section('content')
<div class="jumbotron">
	<h1>{{ $lowercase }}</h1>
</div>
<a href="{{ action('HomeController@uppercase', array($lowercase))  }}">Uppercase</a>
@endsection
