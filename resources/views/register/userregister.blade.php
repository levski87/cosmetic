@extends('layout')

@section('content')

{{  Form::open(array('action' => 'RegisterUserController@create'))   }}

<div class="container">
<div class="col-md-12">
<h1 style="color: gray;"> Register Now </h1>
</div>
<div class="form-group">
</div>
	<div class="container">


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('email', 'E-Mail Address') }}
{{ Form::email('email', null , array('class' => 'form-control')) }}
<br>
{{ Form::label('first_name', 'First Name') }}
{{ Form::text('first_name', null, array('class' => 'form-control')) }}
<br>
{{ Form::label('last_name', 'Last Name') }}
{{ Form::text('last_name', null, array('class' => 'form-control')) }}
<br>
{{ Form::submit('Register!', null, array('class' => 'btn btn-default')) }}
</div>
</div>
{{  Form::close()   }}


@stop