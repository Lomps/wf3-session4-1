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
            @foreach ($themes as $theme)            		
			<h2>
				Page du thème : {{$theme->nom_theme}}
            </h2>
            @endforeach
        </div>
        <div class="col-12">
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
        </div>
    </main>
</section>
@endsection