<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="myscript.js"></script>

@include('partials.head')

@yield('header')
</head>

<body>

@if (Auth::check())
<nav class="navbar navbar-default navbar-fixed top inverse">
	<div container="container-fluid">
		 <a class="navbar-brand pull-right" href="/profile">Profile</a>
		 <a class="navbar-brand pull-right" href="/logout">Log Out!</a>
	</div>

</nav>

@else

<nav class="navbar navbar-default navbar-fixed top inverse">
	<div container="container-fluid">
		<a class="navbar-brand pull-right" href="/login">Login</a>
		<a class="navbar-brand pull-right" href="/users/create">Sign Up!</a>
	</div>

</nav>

@endif



@yield('content')

@include('partials.footer')
</body>
</html>