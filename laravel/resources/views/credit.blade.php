@extends('layouts.mainlayout')

@section('title')

@section('contenu')
<main class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9 mentionslegales">
                <h2>
                    CREDITS
                </h2>
                <p>
                    Le site Agglomeration-auxerrois.fr est rédigé, animé et mise à jour par l'ensemble du service communication de la Communauté d'agglomération de l'Auxerrois.
                </p>
                <h3>
                    Rédaction, gestion et animation du site Agglomeration-auxerrois.fr
                </h3>
                <p class="pmarges">
                    Directeur de la publication : Guy Férez, Président de la Communauté de l'Auxerrois
                </p>
                <p class="pmarges">
                    Camille Luco, Responsable de la communication
                </p>
                <p class="pmarges">
                    Marie Curieux, Chargée de communication
                </p>
                <p>
                    Laura Sylvestre-Baron, Chargée de communication
                </p>
                <h3>
                    Images et illustrations du site Agglomeration-auxerrois.fr
                </h3>
                <p class="pmarges">
                    Laura Déon - Polyphot
                </p>
                <p class="pmarges">
                    Camille Luco
                </p>
                <p class="pmarges">
                    Marie Curieux
                </p>
                <p class="pmarges">
                    Laura Sylvestre-Baron
                </p>
                <p class="pmarges">
                    Xavier Antoine
                </p>
                <p class="pmarges">
                    Josette Lalliaux
                </p>
                <p>
                    Banque d'images Shutterstock
                </p>
                <h3>
                    Développeur
                </h3>
                <p class="pmarges">
                    Webforce 3 - Auxerre
                </p>
                <p class="pmarges">
                    Julien Chevrier
                </p>
                <p class="pmarges">
                    Sébastien Dujardin
                </p>
                <p class="pmarges">
                    Grégory Oliva
                </p>
                <p>
                    Valentin Pillon
                </p>
            </div>
            <div class="col col-lg-3 mt-4" >
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top w-100 d-block" src="assets/img/images.jpg">
                        <div class="card-body"></div>{{-- pour agrandir le logo --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection