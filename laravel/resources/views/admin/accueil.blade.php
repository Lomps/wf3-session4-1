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
			<p>
				Page d'administration.
			</p>
		</div>
		{{-- gestion templates --}}
		<div class="card-columns">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Gestions thèmes
					</h5>
					<p class="card-text">
						{{ $theme }} thèmes enregistés
					</p>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<small class="text-muted">
							<a href="{{URL::to('/')}}/admin/theme">
								Administrer
							</a> 
							- 
							<a href="#">
								Ajouter
							</a>
						</small>
					</p>
				</div>
			</div>			
			{{-- gestions users --}}
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Gestion utilisteurs
					</h5>
					<p class="card-text">
						<p>{{ $users}} utilisateurs enregistées</p>
						<p>{{ $activeuser }} utilisateurs activés</p>
						<p>{{ $users - $activeuser }} utilisateurs désactivés</p>
					</p>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<small class="text-muted">
							<a href="{{URL::to('/')}}/admin/utilisateurs">
								Administrer
							</a>
						</small>
					</p>
				</div>
			</div>
			{{-- Création et suppression villes --}}
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						Gestion des Mairies
					</h5>
					<p class="card-text">
						{{ $mairie }} mairies enregistées
					</p>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<small class="text-muted">
							<a href="{{URL::to('/')}}/admin/liste-mairie">
								Liste des mairies
							</a>
							- 
							<a href="{{URL::to('/')}}/admin/mairie-administration">
								Administrer
							</a>
							- 
							<a href="{{URL::to('/')}}/admin/inscription-mairie">
								Inscrire une mairie
							</a>
						</small>
					</p>
				</div>
			</div>
		</div>
	</main>
</section>
@endsection