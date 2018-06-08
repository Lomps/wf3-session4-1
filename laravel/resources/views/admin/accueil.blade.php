@extends('layouts.adminlayout')

@section('title', "Administration du site")

@section('contenu')
<main class="container">
	<section class="row">
		<div class="col-12">
			<h2>
				Administration du site
			</h2>
		</div>
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
						
					</p>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<small class="text-muted">
							<a href="#">
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
						{{ $users}} utilisateurs enregistées
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
	</section>
</main>
@endsection