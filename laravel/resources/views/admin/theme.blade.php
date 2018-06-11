@extends('layouts.adminlayout')

@section('title', "Liste des themes")

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
				Liste des thèmes
            </h2>
            @foreach ($themes as $theme)
			<div class="row">               
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top w-100" src="{{asset('assets/img/theme') }}/{{$theme->screen_theme}}" alt="{{$theme->nom_theme}}">
                        <div class="card-body">
                        <h5 class="card-title text-center">{{$theme->nom_theme}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
							<a href="{{ route('themevue', ['id' => $theme->id_theme]) }}" class="btn btn-primary">Voir le thème</a>
							<a href="#" class="btn btn-warning">Modifier les coordonées</a>
                            <a href="#" class="btn btn-danger">Supprimer le thème</a>                            
                        </ul>                        
                    </div>
			    </div>
			</div>				
			@endforeach
		</section>
	</div>
</main>
@endsection