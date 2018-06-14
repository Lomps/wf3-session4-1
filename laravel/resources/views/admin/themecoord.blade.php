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
				Coordonnées du thème
			</h2>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-2 text-center">
					<strong>
						Nom de la zone
					</strong>
				</div>
				<div class="col-5 text-center">
					<strong>
						Coordonnées
					</strong>
				</div>
				<div class="col-1 text-center">
					<strong>
						Forme
					</strong>
				</div>				
				<div class="col-1 text-center">
					<strong>
						Type de données
					</strong>
				</div>
				<div class="col-1 text-center">
					<strong>
						N° de la page
					</strong>
				</div>
				<div class="col-2 text-center">
					<strong>
						Action
					</strong>
				</div>
				<hr class="col-12">
			</div>				
			@foreach($zones as $zone)
			<div class="row py-1">
				{{-- Nom d la zone --}}
				<div class="col-2 text-center">
					{{ $zone->nom_de_la_zone }}
				</div>
				{{-- coordonnée --}}
				<div class="col-5 text-center">
					{{ $zone->coordonnees }}
				</div>
				{{-- forme --}}
				<div class="col-1 text-center">
					{{ $zone->forme }}
				</div>
				{{-- type --}}
				<div class="col-1 text-center type">
                    @php	
                        switch( $zone->type_donnee ){    
                            // titre    
                            case 1:
                                echo "titre";
                            break;
                            // texte
                            case 2:
                                echo "texte";
                            break;
                            //image
                            case 3:
                                echo "image"; 
                            break;                          
                        }
                    @endphp	
				</div>
				{{-- N° page --}}
				<div class="col-1 text-center">
					{{ $zone->numero_page  }}
				</div>
				{{--  action  --}}
				<div class="col-2 text-center">
					{{--  modification  --}}
					{{--  <a class="btn btn-warning btn-sm" href="#">
						Modifier
					</a>  --}}
					{{--  suppression  --}}
					{{--  <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#confirmModale" data-id="">
						Supprimer
					</a>  --}}
				</div>
			</div>
            <hr class="col-12">
            {{-- @endif --}}
			@endforeach
			{{-- pagination --}}
			<nav aria-label="Page navigation">
				{{ $zones->links('vendor.pagination.bootstrap-4') }}
			</nav>
			{{--  ajouter une zone  --}}
			{{--  <a class="btn btn-primary btn-sm" href="#">
				Ajouter une coordonnée
			</a>  --}}
			{{--  retour page theme  --}}
			<a class="btn btn-secondary btn-sm" href="{{URL::to('/')}}/admin/theme">
				Retour a la page des thèmes
			</a>
		</div>
	</main>
</section>
{{--  modal  --}}
{{-- <div class="modal" tabindex="-1" id="confirmModale" role="dialog">
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
</script>   --}}
@endsection