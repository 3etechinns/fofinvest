<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8" />

		<title>FoFInvest @yield('title')</title>

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    		
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />

	     <!-- Bootstrap core CSS     -->
	     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

	    <!--  Paper Dashboard core CSS    -->
	    <link href="{{ asset('css/paper-dashboard.css?v=1.2.1') }}" rel="stylesheet"/>

	    <!--  Fonts and icons     -->
	    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	@yield('style')
	</head>
<body>