 @extends('layouts.mainlayout')

 @section('title', "Contactez nous")

 @section('contenu')
 <main class="container-fluid">
        <section class="container">
                {{-- header --}}
                <div class="row" id="title">
                        <h1 class="p-4 mt-2">
                                Communauté d'agglomération de l'Auxerrois
                        </h1>
                        <h2 class="p-4 mt-3">
                                Président : Guy Férez, maire d’Auxerre
                        </h2>
                </div>
                {{-- premiere section --}}
                <div class="row p-4 mt-3" id="row1">
                        <div class="col col-sm-6 ">
                                <p>
                                        <strong>
                                                Services administratifs
                                        </strong>
                                </p>
                                <p>
                                        6bis pl. Maréchal Leclerc
                                </p>
                                <p>
                                        89000 Auxerre
                                </p>
                                <img class="card-img-top w-100 d-block p2 m3" src="assets/img/images.jpg" id="logo">
                        </div>
                        <div class="col col-sm-6">
                                <p>
                                        <strong>
                                                Services techniques
                                        </strong>
                                </p>
                                <p>
                                        82 rue Guynemer
                                </p>
                                <p>
                                        89000 Auxerre
                                </p>
                                <p>
                                        Tél. : 03 86 72 20 60
                                </p>
                                <p>
                                        Fax : 03 86 72 20 65
                                </p>
                                <p>
                                        Tel. : 0 800 89 2000
                                </p>
                                <p>
                                        Fax : 03 86 18 08 28
                                </p>
                                <p>
                                        Lundi, mardi, jeudi
                                </p>
                                <p>
                                        9h-12h/13h45-17h45
                                </p>
                                <p>
                                        Mercredi 9h-17h45
                                </p>
                                <p>
                                        Vendredi 9h-12h/13h45-17h
                                </p>
                                <p>
                                        Lundi au jeudi
                                </p>
                                <p>
                                        8h30-12h/14h-17h30
                                </p>
                                <p>
                                        Vendredi
                                </p>
                                <p>
                                        8h-12h/13h30-17h
                                </p>
                        </div>
                </div>
                {{-- seconde section --}}
                <div class="row p-4 mt-3" id="row2">
                        <div class="col col-sm-6">
                                <p>
                                        <strong>
                                                Services administratifs
                                        </strong>
                                </p>
                                <p>
                                        6bis pl. Maréchal Leclerc
                                </p>
                                <p>
                                        89000 Auxerre
                                </p>
                                <p>
                                        Tél. : 03 86 72 20 60
                                </p>
                                <p>
                                        Fax : 03 86 72 20 65
                                </p>
                                <p>
                                        Lundi au vendredi
                                </p>
                                <p>
                                        8h30-12h
                                </p>
                                <p
                                >13h30-17h30
                        </p>
                </div>
                <div class="col-12 col-sm-6">
                        <p>
                                <strong>
                                        Services techniques
                                </strong>
                        </p>
                        <p>
                                82 rue Guynemer
                        </p>
                        <p>
                                89000 Auxerre
                        </p>
                        <p>
                                Tel. : 0 800 89 2000
                        </p>
                        <p>
                                Fax : 03 86 18 08 28
                        </p>
                        <p>
                                Lundi au jeudi
                        </p>
                        <p>
                                8h-12h 14h-17h30
                        </p>
                        <p>
                                vendredi 8h-12h 14h-17h
                        </p>
                </div>
        </div>
</section>
</main> 
@endsection