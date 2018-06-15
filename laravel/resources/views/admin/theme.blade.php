@extends('layouts.adminlayout')

@section('title', "Administration du site")

@section('contenu')
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
				Liste des thèmes
			</h2>
		</div>
		<div class="col-12">
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
							<a href="{{ route('themecoord', ['id' => $theme->id_theme]) }}" class="btn btn-warning">Modifier les coordonées</a>
							{{-- suppression en attente --}}
                            {{-- <a href="#" class="btn btn-danger">Supprimer le thème</a> --}}
                        </ul>                        
                    </div>
			    </div>
			</div>				
			@endforeach
		</div>
	</main>
</section>
@endsection