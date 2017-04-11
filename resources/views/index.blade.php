<html>
	<head>
		<title>@yield('title', 'Exercise Tracker')</title>
		@include('includes.head')
	</head>
	<body>
		<header>
			@include('includes.header')
		</header>

		@yield('content')
		
		<footer>
			@include('includes.foot')
		</footer>
	</body>
</html>