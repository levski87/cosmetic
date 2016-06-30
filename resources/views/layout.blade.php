<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="myscript.js"></script>

@include('partials.head')

@yield('header')
</head>

<body>
<nav class="navbar navbar-default navbar-fixed top inverse">
	<div container="container-fluid">
		 <a class="navbar-brand pull-right" href="/login">Login</a>
		 <a class="navbar-brand pull-right" href="/users/create">Sign Up!</a>
	</div>

</nav>

@yield('content')

@include('partials.footer')
</body>
</html>