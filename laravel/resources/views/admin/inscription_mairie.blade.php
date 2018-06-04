@extends('layouts.mainlayout')

@section('title', 'Inscrire une mairie')

@section('contenu')

<main class="container">
    <div class="row">
        <section class="col-12">
            <h1>
                Administration du site 
            </h1>
            @if(session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
            @endif           
            <h2>
                Inscrire une mairie
            </h2>
            <hr>
            {{-- formulaire --}}
            
            <form method="post" action="{{route('postinscription_mairie') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="mairie">
                            Mairie
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('mairie') ? ' is-invalid' : '' }}" type="text" name="mairie" id="mairie" value="{{ old('mairie') }}" required>

                        @if($errors->has('mairie'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('mairie') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="adresse">
                            Adresse
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" type="text" name="adresse" id="adresse" value="{{ old('adresse') }}" required>

                        @if($errors->has('adresse'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('adresse') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="code_postal">
                            Code postal
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" type="text" name="code_postal" id="code_postal" value="{{ old('code_postal') }}" required>

                        @if($errors->has('code_postal'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('code_postal') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="ville">
                            Ville
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" type="text" name="ville"  value="{{ old('ville') }}" required>

                        @if($errors->has('ville'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('ville') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="telephone">
                            Téléphone
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" type="phone" name="telephone" id="telephone" value="{{ old('telephone') }}" required>

                        @if($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('telephone') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="email_mairie">
                            Email
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('email_mairie') ? ' is-invalid' : '' }}" type="email" name="email_mairie" id="email_mairie" value="{{ old('email_mairie') }}" required>

                        @if($errors->has('email_mairie'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('email_mairie') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right">
                        <label class="form-label" for="site">
                            Site
                        </label>
                    </div>
                    <div class="col-9 mb-2">
                        <input class="form-control{{ $errors->has('site') ? ' is-invalid' : '' }}" type="text" name="site" id="site" value="{{ old('site') }}">

                        @if($errors->has('site'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('site') }}
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-2 mb-2 text-right"></div>
                    <div class="col-9 mb-2">
                        <button class="btn btn-primary" type="submit">
                            Inscrire la mairie
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection