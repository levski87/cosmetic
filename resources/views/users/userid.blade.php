@extends('layout')

@section('content')

<h3> <em> User Information </em> </h3>
 <p> First Name: {{ $user->firstname }} </p>
 <p> Last Name: {{ $user->lastname }} </p>
 <p> Email: {{ $user->email }} </p>
 <p> Password: {{ $user->password }} </p>
 <p> Created At: {{ $user->created_at }} </p>
 <p> Updated At: {{ $user->updated_at }} </p>

@stop