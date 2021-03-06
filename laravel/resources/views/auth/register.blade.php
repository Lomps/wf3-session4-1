@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Register') }}
                </div>
                {{-- formulaire --}}
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- champs de nom --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                {{ __('Name') }}
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('name') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- champ de prénom --}}
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">
                                {{ __('Firstname') }}
                            </label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                @if ($errors->has('firstname'))
                                <span class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('firstname') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- champ email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ __('E-Mail Address') }}
                            </label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('email') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- champ mot de passe --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                {{ __('Password') }}
                            </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>
                                        {{ $errors->first('password') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- champ comfirmation mot de passe --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                {{ __('Confirm Password') }}
                            </label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        {{-- select ville --}}
                        <div class="form-group row">
                            <label for="mairie" class="col-md-4 col-form-label text-md-right">
                                Séléctionnez votre ville
                            </label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('mairie') ? ' is-invalid' : '' }}" name="mairie" id="mairie">
                                    <option selected="">
                                        Selectionnez votre ville
                                    </option>
                                    @foreach($affichemaire as $mairie)
                                    <option value="{{$mairie->id_mairie}}">
                                        {{ $mairie->mairie }}
                                    </option>
                                    @endforeach
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
                        {{-- validation de l'inscription --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
