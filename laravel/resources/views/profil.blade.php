@extends('layouts.mainlayout')

@section('title', 'Profil')

@section('contenu')

<main class="container">
	<section class="row">
		<div class="col mt-5">
			<h1>
				Profil de : {{ Auth::user()->name }} {{ Auth::user()->firstname }}
			</h1>
			<p>
				Nom : {{ Auth::user()->name }}
			</p>
			<p>
				Prénom : {{ Auth::user()->firstname}}
			</p>
			<p>
				E-Mail : {{ Auth::user()->email }}
			</p>
			<p>
				Ma mairie : {{$mairie->mairie}}
			</p>
			<a href="{{route('modifprofil')}}" type="button" class="btn btn-primary">
				Modifier mon profil
			</a>
		</div>
	</section>
</main>
@endsection