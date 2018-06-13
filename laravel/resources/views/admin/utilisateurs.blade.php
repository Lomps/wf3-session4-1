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
				Liste des utilisateurs
			</h2>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-2">
					<strong>
						Nom
					</strong>
				</div>
				<div class="col-3">
					<strong>
						Prénom
					</strong>
				</div>
				<div class="col-2 text-center">
					<strong>
						Role
					</strong>
				</div>
				<div class="col-2 text-center">
					<strong>
						Statut
					</strong>
				</div>
				<div class="col-3 text-center">
					<strong>
						Action
					</strong>
				</div>
				<hr class="col-12">
			</div>				
		@foreach($users as $user)
			<div class="row py-1">
				{{-- Nom --}}
				<div class="col-2">
					{{ $user->name }}
				</div>
				{{-- Prénom --}}
				<div class="col-3">
					{{ $user->firstname }}
				</div>
				{{-- Role --}}
				<div class="col-2 text-center">
					{{ $user->role }}
				</div>
				{{-- statut --}}
				<div class="col-2 text-center">
					{{ $user->activeuser }}
				</div>
				{{-- action --}}
				<div class="col-3 text-center">
					@if ($user->activeuser == 0)
						<a class="btn btn-success btn-sm" href="{{ route('activeuser',['id'=>$user->id]) }}">                                
							Activer
						</a>
					@endif
                        <a class="btn btn-warning btn-sm" href="{{ route('modifuser', ['id' => $user->id]) }}">                                
							Modifier
						</a>
					@if ($user->role >0 && $user->role ==1)
                        <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#confirmModale" data-id="{{ $user->id }}">                                
							Supprimer
						</a>
					@endif                        
				</div>
			</div>
			<hr class="col-12">
		@endforeach
			{{-- pagination --}}
			<nav aria-label="Page navigation">
				{{ $users->links('vendor.pagination.bootstrap-4') }}
			</nav>
		</div>
	</main>
</section>
{{-- modal suppression --}}
<div class="modal" id="confirmModale" tabindex="-1" role="dialog">
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
					Voulez vous supprimer lutilisateur ?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Annuler
				</button>
				<a type="button" class="btn btn-primary" id="confirm">
					Valider
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#confirmModale').on('show.bs.modal', function(event)
	{
		var id = $(event.relatedTarget).data('id');
		$(this).find('.modal-body p').html("Voulez-vous vraiment supprimer l'utilistateur'?");
		$("#confirm").attr("href", "{{URL::to('/')}}/admin/utilisateurs/delete/"+id);
	});
</script>
@endsection