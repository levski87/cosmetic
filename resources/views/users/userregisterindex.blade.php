@extends('layout')

@section('content')

{{  Form::open(array('action' => 'UsersController@store'))   }}

<div class="container">
<div class="col-md-12">
<h1 style="color: gray;"> Register Now </h1>
</div>
<div class="form-group">
</div>
	<div class="container">



{{ Form::label('email', 'E-Mail Address') }}
{{ Form::email('email', null , array('class' => 'form-control')) }}
	@if (!empty($errors->first('email')))
		<div class="alert alert-warning">	{{ $errors->first('email') }} </div>
   @endif
		<br>
{{ Form::label('username', 'User Name') }}
{{ Form::text('username', null, array('class' => 'form-control')) }}

		@if (!empty($errors->first('username')))

		<div class="alert alert-warning">{{ $errors->first('username') }} </div>
		@endif
		<br>
{{ Form::label('firstname', 'First Name') }}
{{ Form::text('firstname', null, array('class' => 'form-control')) }}

		@if (!empty($errors->first('firstname')))

		<div class="alert alert-warning">{{ $errors->first('firstname') }} </div>
		@endif

		<br>
{{ Form::label('lastname', 'Last Name') }}
{{ Form::text('lastname', null, array('class' => 'form-control')) }}

		 @if (!empty($errors->first('lastname')))
		<div class="alert alert-warning">{{ $errors->first('lastname') }} </div>
		@endif
<br>
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class' => 'form-control')) }}

		@if (!empty($errors->first('password')))

		<div class="alert alert-warning">{{ $errors->first('password') }} </div>
		<br>
		@endif

{{ Form::submit('Register!', null, array('class' => 'btn btn-default')) }}
</div>
</div>
{{  Form::close()   }}



@stop