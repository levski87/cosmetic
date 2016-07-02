@extends('layout')

@section('content')

{{  Form::open(array('action' => 'LoginController@validate'))   }}

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



@stop