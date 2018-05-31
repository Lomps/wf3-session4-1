@extends('layouts.mainlayout')

@section('title', 'Profil')

@section('contenu')

<main class="container">
	<section class="row">
		<div class="col">
			<h1>Profil de : {{ Auth::user()->name }}</h1>
			<p>Nom : {{ Auth::user()->name }}</p>
			<p>E-Mail : {{ Auth::user()->email }}</p>
		</div>		
	</section>    
</main>

@endsection