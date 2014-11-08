<!doctype html>
<html>
<head>
	@include('includes.head')
  {{ HTML::style('style.css') }}
</head>
<body>
  {{ HTML::image('img02.jpg') }}

<div class="container">


	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">

		<!-- sidebar content -->
		<div id="sidebar" class="col-md-4">
			@include('includes.sidebar')
		</div>

		<!-- main content -->
		<div id="content" class="col-md-8">
			@yield('content')
		</div>

	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
