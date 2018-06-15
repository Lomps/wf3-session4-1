@extends('layouts.adminlayout')

@section('title', 'Administration du site')

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
                Inscrire une mairie
            </h2>
            <hr>
        </div>
        <section class="col-12">
            {{-- formulaire --}}            
            <form method="post" action="{{route('postinscription_mairie') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- champ mairie --}}
                <div class="form-group row">
                    <label for="mairie" class="col-md-3 col-form-label text-md-right">
                        Mairie
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('mairie') ? ' is-invalid' : '' }}" type="text" name="mairie" id="mairie" value="{{ old('mairie') }}" required>
                        @if($errors->has('mairie'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('mairie') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ adresse --}}
                <div class="form-group row">
                    <label for="adresse" class="col-md-3 col-form-label text-md-right">
                        Adresse
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" type="text" name="adresse" id="adresse" value="{{ old('adresse') }}" required>
                        @if($errors->has('adresse'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('adresse') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ code postal --}}
                <div class="form-group row">
                    <label for="code_postal" class="col-md-3 col-form-label text-md-right">
                        Code postal
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" type="text" name="code_postal" id="code_postal" value="{{ old('code_postal') }}" required>
                        @if($errors->has('code_postal'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('code_postal') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ ville --}}
                <div class="form-group row">
                    <label for="ville" class="col-md-3 col-form-label text-md-right">
                        Ville
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" type="text" name="ville"  value="{{ old('ville') }}" required>
                        @if($errors->has('ville'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('ville') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ telephone --}}
                <div class="form-group row">
                    <label for="telephone" class="col-md-3 col-form-label text-md-right">
                        Téléphone
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" type="phone" name="telephone" id="telephone" value="{{ old('telephone') }}" required>
                        @if($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('telephone') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ email --}}
                <div class="form-group row">
                    <label for="email_mairie" class="col-md-3 col-form-label text-md-right">
                        Email
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('email_mairie') ? ' is-invalid' : '' }}" type="email" name="email_mairie" id="email_mairie" value="{{ old('email_mairie') }}" required>
                        @if($errors->has('email_mairie'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('email_mairie') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- champ site --}}
                <div class="form-group row">
                    <label for="site" class="col-md-3 col-form-label text-md-right">
                        Site
                    </label>
                    <div class="col-md-8">
                        <input class="form-control{{ $errors->has('site') ? ' is-invalid' : '' }}" type="text" name="site" id="site" value="{{ old('site') }}">
                        @if($errors->has('site'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('site') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{-- bouton d'inscription --}}
                <div class="form-group row pb-3">
                    <div class="col-md-6 offset-md-3">
                        <button class="btn btn-primary" type="submit">
                            Inscrire la mairie
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </main>
</section>
@endsection