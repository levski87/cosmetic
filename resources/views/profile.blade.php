@extends('layout')


@section ('content')

<p> First Name: {{ $user->firstname }}</p>
<p> Last Name: {{ $user->lastname }} </p>
<p> Email: {{ $user->email }} </p>
@stop