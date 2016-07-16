<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('src/css/main.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="row">
				@include('includes.header')
			</div>
			
			<div class="row main">
				@yield('content')
			</div>

			<div class="row">
				@include('includes.footer')
			</div>
		</div>
	</body>
</html>