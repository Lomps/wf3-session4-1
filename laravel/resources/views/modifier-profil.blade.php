@extends('layouts.mainlayout')

@section('title', 'Modifier profil')

@section('contenu')

<header class="container">
	<div class="row">
		<div class="col-12">
			@if(session('message'))
			<div class="alert alert-success text-center">
				{{ session('message') }}
			</div>
			@endif
			<h1>
				Modifier votre profil
			</h1>
		</div>
	</div>
</header>
{{-- contenu --}}
<main class="container">
	<section class="row">
		<div class="col-12 mb-5">
			<h2>
				Profil de : {{ Auth::user()->name }} {{ Auth::user()->firstname }}
			</h2>
			<hr>
			<form method="post" action="{{route('validemodifprofil')}}" enctype="miltipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" value="{{Auth::user()->id}}" name="id" required>
				<div class="row">
					{{-- Nom --}}
					<div class="col-4 mb-2 text-right">
						<label for="name" class="form-label">
							Nom
						</label>
					</div>
					<div class="col-8 mb-2">
						<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name" value="{{ Auth::user()->name }}" >
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('name') }}
							</strong>
						</span>
						@endif
					</div>
					{{-- Prénom --}}
					<div class="col-4 mb-2 text-right">
						<label for="firstname" class="form-label">
							Prénom
						</label>
					</div>
					<div class="col-8 mb-2">
						<input class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ Auth::user()->firstname}}" required>
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('firstname') }}
							</strong>
						</span>
						@endif
					</div>
					{{-- mot de passe --}}
					<div class="col-4 mb-2 text-right">
						<label for="password" class="form-label">
							Mot de passe
						</label>
					</div>
					<div class="col-8 mb-2">
						<input class="form-control" type="password" name="password" id="password" >
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('password') }}
							</strong>
						</span>
						@endif
					</div>
					{{-- Confirmation mot de passe --}}
					<div class="col-4 mb-2 text-right">
						<label for="password" class="form-label">
							Confirmez mot de passe
						</label>
					</div>
					<div class="col-8 mb-2">
						<input class="form-control" type="password" name="password_confirmation" id="password-confirm">
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('password') }}
							</strong>
						</span>
						@endif
					</div>
					{{-- Email --}}
					<div class="col-4 mb-2 text-right">
						<label for="email" class="form-label">
							Email
						</label>
					</div>
					<div class="col-8 mb-2">
						<input class="form-control" type="email" name="email" id="email" value="{{ Auth::user()->email }}">
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('email') }}
							</strong>
						</span>
						@endif
					</div>
					{{-- Mairie --}}
					<div class="col-4 mb-2 text-right">
						<label for="mairie" class="form-label">
							Mairie
						</label>
					</div>
					<div class="col-8 mb-2">
						<select id="mairie" name="mairie" class="form-control">
							@foreach($profilaffichemaire as $mairie)
								<option value="{{$mairie->id_mairie}}"{{(Auth::user()->mairie_id_mairie == $mairie->id_mairie) ? ' selected' : '' }}>{{ $mairie->mairie }}</option>
							@endforeach
						</select>
						@if($errors->has('titre'))
						<span class="invalid-feedback">
							<strong>
								{{ $errors->first('mairie') }}
							</strong>
						</span>
						@endif
					</div>
					<hr>
					{{-- validation modifications --}}
					<div class="col-4 mb-2"></div>
					<div class="col-8">
						<button type="submit" class="btn btn-primary">
							valider
						</button>
						<a href="{{route('profil')}}" type="button" class="btn btn-secondary">
							Annuler
						</a>
					</div>
				</div>
			</form>
		</div>
	</section>
</main>

@endsection