<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Test</title>
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		
		<test-component></test-component>
	</div>

	<a class="btn btn-info" href="/">Home</a>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>