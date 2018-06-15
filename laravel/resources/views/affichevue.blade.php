@extends('layouts.adminlayout')

@section('title', "Page du thème")

@section('contenu')
{{--  header  --}}
<header class="container">
	<div class="row">
		<div class="col-12">						
			<h1>
				Vue des page du thème
            </h1>
        </div>
    </div>
</header>
{{--  contenu  --}}
<section class="container pb-4">
    <main class="row pt-3">
        <div class="col-12">
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
                </div>
                @endforeach
            </div>
            <div class="col-12 mb-4">
                <a class="btn btn-secondary" href="{{ route('affichetheme') }}" role="button">
                    Retour à la page des thèmes
                </a>
            </div>		
        </div>
    </main>
</section>
@endsection