<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title> @yield('title') | Rakibul Islam - Laravel and Vue.js Developer-</title>
	<meta name="description" content="Md. Rakibul Islam is a passoinate Laravel and Vue.js developer. He has also experiences in core PHP, Javascript, jQuery, Mysql and wordpress.">
	@include('includes.head')
</head>

<body class="@yield('class')">
	<div id="app">

		@include('includes.header')

		@yield('banner')

		<div class="main-container">

            @yield('content')

        </div>

        @include('includes.footer')
	</div>

	@include('includes.script')
	
	@stack('script')
</body>
</html>