<!DOCTYPE html>

<html lang="en">
<head>
	@include('layouts.head')
</head>
<body>
	@include('layouts.nav')
	@include('layouts.header')
	@include('layouts.footer-scripts')
	@yield('content')
	@include('layouts.footer')
</body>
</html>