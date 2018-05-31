<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<title>@yield('title') - {{ config('app.name') }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Fichier JS -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>		
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
		<!-- Fichier CSS -->		
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.min.css') }}">
	</head>
  <body>
  	<section class="container">
  		<div class="row">
  			<div class="col mt-4">
				<img src="{{ asset('assets/img/uploads/featured/images.jpg') }}">
  			</div>
  		</div>
  		
  	</section>
  		
				
