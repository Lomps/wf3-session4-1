@extends('layouts.mainlayout')

@section('title', "Accueil")

@section('contenu')
<main>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mt-4">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top w-100 d-block" src="assets/img/images.jpg">
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <h1>
                        Accueil
                    </h1>
                    <p>Bonjour {{ Auth::user()->name }} {{ Auth::user()->firstname }} !</p>
                    <p>Choisissez votre thème et cliquez sur la zone de texte pour commencer à créer votre journal.</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection