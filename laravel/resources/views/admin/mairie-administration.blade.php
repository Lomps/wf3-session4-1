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
				Administration des mairies
			</h2>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-3">
					<strong>
						Mairie
					</strong>
				</div>
				<div class="col-2">
					<strong>
						Adresse
					</strong>
				</div>
				<div class="col-1">
					<strong>
						Code postal
					</strong>
				</div>				
				<div class="col-3">
					<strong>
						Ville
					</strong>
				</div>
				<div class="col-1 text-left">
					<strong>
						Utilisateur
					</strong>
				</div>
				<div class="col-2 text-center">
					<strong>
						Action
					</strong>
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
					{{ $mairie->nbre  }}
				</div>
				{{--  action  --}}
				<div class="col-2 text-center">
					{{--  modification  --}}
					<a class="btn btn-warning btn-sm" href="{{ URL::to('/')}}/admin/modification-mairie/{{$mairie->id_mairie}}">
						Modifier
					</a>
					{{--  suppression  --}}
					@if($mairie->nbre == 0)
						<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#confirmModale" data-id="{{$mairie->id_mairie}}">
							Supprimer
						</a>
					@endif
						
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
{{--  modal  --}}
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
  <script type="text/javascript">
	$('#confirmModale').on('show.bs.modal', function (event) {
		var id = $(event.relatedTarget).data('id');
		$(this).find('.modal-body p').html("Voulez-vous vraiment supprimer cet utilisateur ?");
		$("#confirm").attr("href", "{{URL::to('/')}}/admin/mairiesupprime/"+id);
	});
</script>  
@endsection