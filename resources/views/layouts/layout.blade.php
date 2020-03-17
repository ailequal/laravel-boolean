<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials._head')
</head>

<body>
	<header>
		@include('partials._header')
	</header>
	<main>
		@yield('main')
	</main>
	<footer>
		@include('partials._footer')
	</footer>
</body>

</html>