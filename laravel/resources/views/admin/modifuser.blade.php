@extends('layouts.adminlayout')
@section('title', "Administration du site")
@section('contenu')
<!-- Header -->
<header class="container">
    <div class="row">
        <div  class='col-12'>
            <h1>Administration du site</h1>
        </div>
    </div>
</header>
<!-- Content -->
<section id="article" class="container pb-4">
    <main class="row pt-3">
            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
        <div class="col-12">
            <h2>Modification dun utilisateur</h2>
        </div>
        <section class="col-12">
            {{--  formulaire  --}}
            <form method="POST" action="{{ route('postuser')}}">
                {{ csrf_field() }}
                {{--  reccuprer l'id de l'utilisateur  --}}
                <input type="hidden" name="id" value="{{ $user->id }}">
                {{--  nom  --}}
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right">
                        Nom
                    </label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>
                        @if ($errors->has('titre'))
                            <span class="invalid-feedback">
                                <strong>
                                    {{ $errors->first('name') }}
                                </strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--  prenom  --}}
                <div class="form-group row">
                    <label for="firstname" class="col-md-3 col-form-label text-md-right">
                        Prénom
                    </label>
                    <div class="col-md-8">
                        <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ $user->firstname }}" required autofocus>
                        @if ($errors->has('titre'))
                            <span class="invalid-feedback">
                                <strong>
                                    {{ $errors->first('firstname') }}
                                </strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--  email  --}}
                <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label text-md-right">
                        E-mail
                    </label>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                        @if ($errors->has('titre'))
                            <span class="invalid-feedback">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{-- Mairie --}}
                <div class="form-group row">
                    <label for="mairie" class="col-md-3 col-form-label text-md-right">
                        Mairie
                    </label>
                    <div class="col-md-8">
                        <select class="form-control{{ $errors->has('mairie') ? ' is-invalid' : '' }}" name="mairie" id="mairie">
                            <option selected="">
                                Selectionnez votre ville
                            </option>
                            
                        </select>
                        @if ($errors->has('mairie'))
                        <span class="invalid-feedback">
                            <strong>
                                {{ $errors->first('mairie') }}
                            </strong>
                        </span>
                        @endif
                    </div>
                </div>
                {{--  role  --}}
                <div class="form-group row">
                    <label for="role" class="col-md-3 col-form-label text-md-right">
                        Rôle
                    </label>
                    <div class="col-md-8">
                        <select id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" required>
                            {{--  select role  --}}
                            <option value="">
                                -- Sélectionner un rôle --
                            </option>
                            {{--  banni ou inactif  --}}
                            <option value="0"{{($user->role == 0) ? ' selected' : ''}}>
                                Banni ou inactif
                            </opttion>
                            {{--  inscrit et actif  --}}
                            <option value="1"{{($user->role == 1) ? ' selected' : ''}}>
                                Inscrit et actif
                            </opttion>
                            {{--  administrateur  --}}
                            <option value="4"{{($user->role == 4) ? ' selected' : ''}}>
                                administrateur
                            </opttion>
                        </select>
                        @if ($errors->has('role'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--  utilisateur actif  --}}
                <div class="form-group row">
                        <label for="activeuser" class="col-md-3 col-form-label text-md-right">
                            Actif
                        </label>
                        <div class="col-md-8">
                            <select id="activeuser" class="form-control{{ $errors->has('activeuser') ? ' is-invalid' : '' }}" name="activeuser" required>
                                {{--  select activité  --}}
                                <option value="">
                                    -- Sélectionnez action --
                                </option>
                                {{--  inactif  --}}
                                <option value="0"{{($user->activeuser == 0) ? ' selected' : ''}}>
                                    inactif
                                </opttion>
                                {{--  actif  --}}
                                <option value="1"{{($user->activeuser == 1) ? ' selected' : ''}}>
                                    Actif
                                </opttion>
                            </select>
                            @if ($errors->has('activeuser'))
                                <span class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('activeuser') }}
                                    </strong>
                                </span>
                            @endif
                        </div>
                    </div>
                <div class="form-group row pb-3">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                            Modifier
                        </button>
                        <a href="{{ route('utilisateurs') }}" class="btn btn-secondary">
                            {{ __('Annuler') }}
                        </a>
                    </div>
                </div>
            </form>
        </section>
    </main>
</section>
@endsection
