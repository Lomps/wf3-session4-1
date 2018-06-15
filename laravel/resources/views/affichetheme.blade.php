@extends('layouts.mainlayout')

@section('title', "Choisissez votre thème")

@section('contenu')
<header class="container">
	<div class="row">
		<div class="col-12">						
			<h1>
				Choisissez votre thème
			</h1>
		</div>
	</div>
</header>
{{--  contenu  --}}
<section class="container pb-4">
	<main class="row pt-3">
		<div class="col-12">		
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
							<a href="{{ route('affichevue', ['id' => $theme->id_theme]) }}" class="btn btn-primary">Voir le thème</a>
							<a href="#">Créer votre articles</a>
                        </ul>                        
                    </div>
			    </div>
			</div>				
			@endforeach
		</div>
	</main>
</section>
@endsection