@extends('layouts.mainlayout')

@section('title')

@section('contenu')
<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>
<main>

   @if(session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif     
	<!-- Container de la page 1-->
   <section class="container bgWhite mt-1">
   	<!-- Row1 -->
   		<div class="row text-center">
   			<!-- col-->
   			<div class="col col-lg-6 bordure">   				
                <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     @foreach($articles as $art)
                     <area shape="rect" coords="{{ $art->coordonnees}}" href="{{ route('ajoutarticle', ['id_contenu'=> $art->coordoonnees]) }}" alt="vers a"/>                      
                     <p>
                     <a class="blue" id="confirmModale" href="#" data-toggle="modal" data-target="#exampleModal" data-id='{{$art->contenu}}'>Cliquer</a>                    
                     </p> 
                     @endforeach                                      
                  </map>
               </p>
   			</div>
   			<!-- col-->
   			<!-- col-->
   			<div class="col col-lg-6 bordure">
   				<p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" id="confirmModale" 

                     href="#"data-toggle="modal" data-target="#exampleModal3">Cliquer</a>
                  </p>
                     </map>
               </p>
   			</div>
   			<!-- col-->
   		</div>
   	<!-- /Row1 -->
   	<!-- Row2 -->
   		<div class="row text-center">
               <!-- col-->
            <div class="col col-lg-8 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->   			
   		</div>
   	<!-- /Row2 -->
   	<!-- Row3 -->
   		<div class="row text-center">
   			<div class="col text-center">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal3">Cliquer</a>
                  </p>
                     </map>
               </p>   
            </div>
   		</div>
   	<!-- /Row3 -->
   	<!-- Row4 -->
   		<div class="row text-center">
   			      <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
   		</div>
   	<!-- /Row4 -->
   </section>
   <!-- /Container de la page1-->

   <!-- Container de la page 2-->
   <section class="container bgWhite mt-3">
      <!-- Row1 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-6 offset-6 bordure">
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>         
         </div>
      <!-- /Row3 -->
   </section>
   <!-- /Container de la page2-->

   <section class="container bgWhite mt-3">
      <!-- Row1 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>         
         </div>
          <div class="row text-center">
         <!-- col-->
         <div class="col col-lg-4 bordure">
            <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
         </div>
         <!-- col-->
         <!-- Row4 -->
         <div class="col col-lg-4 bordure">
            <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
         </div>
         <div class="col col-lg-4 bordure">
            <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
         </div>         
         </div>
      <!-- /Row4 -->
   </section>
   <!-- /Container de la page3-->

    <!-- Container de la page 4-->
   <section class="container bgWhite mt-3">
      <!-- Row1 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>             
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-8 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
           <div class="row text-center">  
            <!-- col-->           
            <div class="col bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal3">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-2 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <div class="col col-lg-2 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal2">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a class="blue" href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
            </div>         
         </div> 
         <!-- /Row3 -->
         <div class="col text-center">
            <button type="submit" class="btn-primary btn">Valider</button>
         </div>   
   </section>
   <!-- /Container de la page4-->


   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Entrez votre texte</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form method="POST" action="{{ route('ajoutarticle') }}"></form>
         <div class="modal-body">           
             <div class="form-group">
               <textarea class="form-control" id="texte" name="texte"  required> {{ old('texte') }}</textarea>
                    <script>
                        CKEDITOR.replace('texte');
                    </script>
             </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
           <a type="submit" id="confirm" class="btn btn-primary">Accepter</a>
         </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Choisisez votre photo</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
            <form>             
             <div class="form-group">
                 <div class="custom-file">              
                  <label for=logo">Choisissez votre fichier</label>
                  <input type="file" class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}" name="logo" value="{{ old('logo') }}" id="logo lang="fr">
                     @if ($errors->has('logo'))
                     <span class="invalid-feedback">
                        <strong> {{ $errors->first('logo')}}</strong>
                     </span>
                     @endif
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
           <a type="button" id="confirm" class="btn btn-primary">Accepter</a>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="exampleModa3" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Entrez votre titre</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
            <form method="POST"  action="{{ route('ajoutarticle') }}">             
             <div class="form-group">
               <label for="message-text" class="col-form-label">Message:</label>
               <textarea class="form-control" id="message-text"></textarea>
             </div>
           </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
           <button type="submit" class="btn btn-primary">Accepter</button>
         </div>
         </div>
      </div>
   </div>
</main>

   <script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function(event)
      {
         var id = $(event.relatedTarget).data('id');   
         var contenu = $(event.relatedTarget).data('contenu');      
         $(this).find('.modal-body p').html("Entrez votre texte");
         $('#confirm').attr('href', "{{URL::to('/')}}/ajoutarticle/");
      });
   </script>

   <script type="text/javascript">
      // Cette fonction gère l'ajout du texte saisi par l'utilisateur
   function ajoutarticle()
   {
      var id_contenu = $("#id_contenu").val();
      var titre = $("#titre").val();
      var contenu = $("#contenu").val();
      var nom_image = $("#nom_image").val();
      var nom_signature = $("#nom_signature").val();
      var zone_id_zone = $("#zone_id_zone").val();
      var iduser = $("#iduser").val();
      $.ajax
      (
         {
            url: "/ajoutarticle",
            type: "POST",
            data: "id_contenu="+id_contenu+"&titre="+titre+"&contenu="+contenu+"&nom_image="+nom_image+"&nom_signature="+nom_signature+"&zone_id_zone="+zone_id_zone+"&iduser="+iduser
         })
      .done(function(reponse)
      {
         $("#contenu").html("");
      })
      .fail(function(error)
      {
         console.log(error);
      });   
      
   }

   </script>

@endsection