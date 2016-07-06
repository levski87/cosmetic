@extends('layout')

@section('header')
<title> Login Page </title>


@section ('content')

{{  Form::open(array('action' => 'LoginController@check'))   }}

<div class="container">
    <div class="col-md-12">
        <h1 style="color: gray;"> Login </h1>
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
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control')) }}

        @if (!empty($errors->first('password')))

        <div class="alert alert-warning">{{ $errors->first('password') }} </div>
        <br>
        @endif
<br>
        {{ Form::submit('Login!', null, array('class' => 'btn btn-default')) }}
    </div>
</div>
{{  Form::close()   }}



@stop
@stop