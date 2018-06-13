@extends('layouts.mainlayout')

@section('title')

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
                    <h1 class="accueil">
                        Bienvenue sur le site de communication de la communauté Auxerroise.
                    </h1>
                    <p>
                        Vous êtes maire, adjoint ou secrétaire de mairie et souhaitez créer votre bulletin municipal?
                    </p>
                    <p>
                        Ce site vous le permet, une inscription et vous pourrez commencer à inscrire vos premiers articles.
                    </p>
                    <p>
                        Une fois votre journal validé complètement, celui-ci sera converti au format PDF afin d'envoyer votre journal en impression.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection