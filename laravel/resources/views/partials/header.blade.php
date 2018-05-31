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
		<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
			<section class="container">
		  <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('assets/img/images.jpg') }}" style="height: 40px"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		        	<a class="nav-link" href="{{ URL::to('/') }}">Accueil <span class="sr-only">(current)</span></a>
			    </li>		      
		    </ul>
		  	<ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->                
                @guest
                    <li><a class="nav-link" href="{{ route('profil') }}">{{ __('Profil') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                	@if(Auth::user()->role==4)
                		<li><a class="nav-link" href="{{route('admin')}}">{{__('Admin')}}</a></li>
                	@endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        	<a class="dropdown-item" href="{{ route('profil') }}">{{ __('Profil') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                	document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		  </div>
		  </section>
		</nav>