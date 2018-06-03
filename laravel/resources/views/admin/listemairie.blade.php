@extends('layouts.adminlayout')

@section('title', "Liste de mairie")

@section('contenu')
<main class="container">
	<div class="row">
		<section class="col-12">						
			<h1>
				Administration du site
			</h1>
			@if(session('message'))
			<div class="alert alert-success text-center">
				{{ session('message') }}
			</div>
			@endif		
			<h2>
				Liste des mairies
			</h2>
			<div class="row">
				<div class="col-2">
					Mairie
				</div>
				<div class="col-3">
					Adresse
				</div>
				<div class="col-1">
					Code postal
				</div>
				<div class="col-2">
					Ville
				</div>
				<div class="col-1">
					Téléphone
				</div>
				<div class="col-3">
					Email
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
		</section>
	</div>
</main>
@endsection