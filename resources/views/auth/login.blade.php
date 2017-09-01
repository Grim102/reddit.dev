@extends('layouts.master')

@section('title')
	<title>Login</title>
@stop
@section('content')
<section class="col-sm-6 col-sm-offset-3 well">
<form method="POST" action="/auth/login" class="form-horizontal">
    {!! csrf_field() !!}
	<section class="form-group">
			<label for="email" class="col-lg-2 control-label">Email</label>
		<div class="col-lg-10">
			<input type="email" name="email" class="form-control" id="email"
					value="{{ old('email') }}" autofocus>
		</div>
	</section>
	<section class="form-group">
			<label for="password" class="col-lg-2 control-label">Password</label>
		<div class="col-lg-10">
			<input type="password" name="password" id="password" class="form-control">
		</div>
	</section>
	<section class="form-group">
		<div class="col-lg-10 col-lg-offset-2">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</section>
</form>
</section>
@stop
