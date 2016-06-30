@extends('layout')

@section('content')
<ul>
@foreach ($users as $user)

	<li> <a href="users/{{ $user->id }}"> {{ $user->firstname }} </a> </li>


@endforeach 
</ul>
@stop