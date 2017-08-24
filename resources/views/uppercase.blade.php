@extends('layouts.master')

@section('title')
	<title>Uppercase</title>
@endsection

@section('content')
<div class="jumbotron text-center">
	<h1>{{ $uppercase }}</h1>
<h2><a href="{{ action('HomeController@lowercase', array($uppercase))  }}">Lowercase</a></h2>
</div>
@endsection
