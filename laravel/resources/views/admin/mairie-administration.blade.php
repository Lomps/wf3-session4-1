@extends('layouts.adminlayout')

@section('title', "Liste de mairie")

@section('contenu')
<main class="container">
	<div class="row">
		<section class="col-12">						
			<h1>
				Administration du site
			</h1>
			{{-- message de validation --}}
			@if(session('message'))
			<div class="alert alert-success text-center">
				{{ session('message') }}
			</div>
			@endif		
			<h2>
				Liste des mairies
			</h2>
			<div class="row">
				<div class="col-3">
					Mairie
				</div>
				<div class="col-2">
					Adresse
				</div>
				<div class="col-1">
					Code postal
				</div>				
				<div class="col-3">
					Ville
				</div>
				<div class="col-1 text-left">
					Utilisateur
				</div>
				<div class="col-2 text-center">
					Action
				</div>
				<hr class="col-12">
			</div>				
			@foreach($listemairie as $mairie)
			<div class="row py-1">
				{{-- Nom de la mairie --}}
				<div class="col-3">
					{{ $mairie->mairie }}
				</div>
				{{-- adresse --}}
				<div class="col-2">
					{{ $mairie->adresse }}
				</div>
				{{-- code postal --}}
				<div class="col-1">
					{{ $mairie->code_postal }}
				</div>
				{{-- ville --}}
				<div class="col-3">
					{{ $mairie->ville }}
				</div>
				{{-- utilisateur --}}
				<div class="col-1 text-left">
					{{--  {{ $mairie->telephone }}  --}}
				</div>
				{{--  action  --}}
				<div class="col-2">
					<div class="row">
						{{--  modification  --}}
						<div class="col-6">
							<a class="btn btn-warning btn-sm" href="">
								Modifier
							</a>
						</div>
						{{--  suppression  --}}
						<div class="col-6">
							<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#confirmModale" data-id="">
								Supprimer
							</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="col-12">
			@endforeach
		</section>
	</div>
</main>
<div class="modal" tabindex="-1" id="confirmModale" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Confirmer la suppression
				</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			    </button>
			</div>
			<div class="modal-body">
			    <p>
					Modal body text goes here.
				</p>
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">
					Fermer
				</button>
			    <a type="button" id="confirm" class="btn btn-primary">
					Valider
				</a>
			</div>
		</div>
	</div>
</div>
{{--  <script type="text/javascript">
	$('#confirmModale').on('show.bs.modal', function (event) {
		var iduser = $(event.relatedTarget).data('id');
		$(this).find('.modal-body p').html("Voulez-vous vraiment supprimer cet utilisateur ?");
		$("#confirm").attr("href", "{{URL::to('/')}}/admin/utilisateurs/delete/"+iduser);
	});
</script>  --}}
@endsection