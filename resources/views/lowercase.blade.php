@extends('layouts.master')

@section('title')
	<title>Lowercase</title>
@endsection

@section('content')
<div class="jumbotron text-center">
	<h1>{{ $lowercase }}</h1>
<h2><a href="{{ action('HomeController@uppercase', array($lowercase))  }}">Uppercase</a></h2>
</div>
@endsection
