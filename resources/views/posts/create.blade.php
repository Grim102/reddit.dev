@extends('layouts.master')

@section('title')
	<title>Create Post</title>
@endsection

@section('content')
<form method="POST" action="{{ action('PostsController@store') }}">
	{!! csrf_field() !!}
    <div class="form-group">
		{!! $errors->first('title', '<span class="help-block">:message</span>') !!} 
		<h2>Title</h2>
		<input class="form-control" type="text" name="title" value="{{ old('title') }}" autofocus>
    </div>
    <div class="form-group">
		{!! $errors->first('abstract', '<span class="help-block">:message</span>') !!} 
		<h2>Abstract</h2>
		<input class="form-control" type="text" name="abstract" value="{{ old('abstract') }}">
     </div>
     <div class="form-group">
		{!! $errors->first('content', '<span class="help-block">:message</span>') !!} 
		<h2>Body</h2>
		<textarea class="form-control text-form" rows="15" name="content">{{ old('content') }}</textarea>
	 </div>
     <button class="btn btn-primary right" id="submit">Submit</button>
</form>
@endsection
