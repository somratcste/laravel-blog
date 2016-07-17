<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin-Dashboard</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('src/css/admin.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="row">
				@include('includes.admin_header')
			</div>
			
			<div class="row main">
				@yield('content')
			</div>

			<div class="row">
				@include('includes.admin_footer')
			</div>
		</div>
	</body>
</html>