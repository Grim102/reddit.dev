@extends('layouts.master')

@section('title')
	<title>Uppercase</title>
@endsection

@section('content')
<div class="jumbotron">
	<h1>{{ $uppercase }}</h1>
</div>
<a href="{{ action('HomeController@lowercase', array($uppercase))  }}">Lowercase</a>
@endsection
