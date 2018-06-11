@extends('layouts.adminlayout')

@section('title', "Page du theme")

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
            @foreach ($themes as $theme)            		
			<h2>
				Page du thème : {{$theme->nom_theme}}
            </h2>
            @endforeach
			<div class="row">
                @foreach ($page as $pages)              
                <div class="card w-50 mb-4">
                    <img class="card-img-top w-100" src="{{asset('assets/img/theme') }}/{{$pages->images}}" alt="{{$pages->images}}">                    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">
                            Choisir le fichier
                        </label>
                    </div>                       
                </div>
                @endforeach
            </div>
            <div class="col-12 mb-4">
                <a class="btn btn-primary" href="#" role="button">
                    Valider la modification des images
                </a>
                <a class="btn btn-secondary" href="{{ route('theme') }}" role="button">
                    Retour à la page des thèmes
                </a>
            </div>		
		</section>
	</div>
</main>
@endsection