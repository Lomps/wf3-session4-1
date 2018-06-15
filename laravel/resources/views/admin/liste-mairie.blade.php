@extends('layouts.adminlayout')

@section('title', "Administration du site")

@section('contenu')
{{--  header  --}}
<header class="container">
	<div class="row">
		<div class="col-12">						
			<h1>
				Administration du site
			</h1>
		</div>
	</div>
</header>
{{--  contenu  --}}
<section class="container pb-4">
	<main class="row pt-3">
		<div class="col-12">
			{{-- message de validation --}}
			@if(session('message'))
			<div class="alert alert-success text-center">
				{{ session('message') }}
			</div>
			@endif		
			<h2>
				Liste des mairies
			</h2>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-2">
					<strong>
						Mairie
					</strong>
				</div>
				<div class="col-3">
					<strong>
						Adresse
					</strong>
				</div>
				<div class="col-1">
					<strong>
						Code postal
					</strong>
				</div>
				<div class="col-2">
					<strong>
						Ville
					</strong>
				</div>
				<div class="col-1">
					<strong>
						Téléphone
					</strong>
				</div>
				<div class="col-3">
					<strong>
						Email
					</strong>
				</div>
				<hr class="col-12">
			</div>				
			@foreach($listemairie as $mairie)
			<div class="row py-1">
				{{-- Nom de la mairie --}}
				<div class="col-2">
					{{ $mairie->mairie }}
				</div>
				{{-- adresse --}}
				<div class="col-3">
					{{ $mairie->adresse }}
				</div>
				{{-- code postal --}}
				<div class="col-1">
					{{ $mairie->code_postal }}
				</div>
				{{-- ville --}}
				<div class="col-2">
					{{ $mairie->ville }}
				</div>
				{{-- téléphone --}}
				<div class="col-1">
					{{ $mairie->telephone }}
				</div>
				{{-- email --}}
				<div class="col-3">
					{{ $mairie->email_mairie }}
				</div>
			</div>
			<hr class="col-12">
			@endforeach
			{{-- pagination --}}
			<nav aria-label="Page navigation">
				{{ $listemairie->links('vendor.pagination.bootstrap-4') }}
			</nav>
		</div>
	</main>
</section>
@endsection