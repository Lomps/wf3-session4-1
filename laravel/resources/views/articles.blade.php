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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->                 
                     <area shape="rect" coords="10,10,20,30" href="#" alt="titre"/>                      
                     <p>
                     <button data-toggle="modal" data-target="#mamodale" data-type="1" data-zone="1" class="btn btn-primary">Editer</button>                   
                     </p>             

                  </map>
               </p>
   			</div>
   			<!-- col-->
   			<!-- col-->
   			<div class="col col-lg-6 bordure">
   				<p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
              <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  </map>
               </p>
            </div>
            <div class="col col-lg-6 offset-6 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/> 
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>           
                  </map>
               </p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>        
                  </map>
               </p>
            </div>         
         </div>
          <div class="row text-center">
         <!-- col-->
         <div class="col col-lg-4 bordure">
            <p>
               <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                  <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>                    
               </map>
             </p>
         </div>
         <!-- col-->
         <!-- Row4 -->
         <div class="col col-lg-4 bordure">
            <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                    
                     </map>
               </p>
         </div>
         <div class="col col-lg-4 bordure">
            <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                    
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                    
                     </map>
               </p>             
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                    
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                   
                     </map>
               </p>
            </div>
            <div class="col col-lg-8 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  
                     </map>
               </p>
            </div>
            <!-- col-->          
         </div>
           <div class="row text-center">  
            <!-- col-->           
            <div class="col bordure">
              <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  
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
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                  
                     </map>
               </p>
            </div>
            <!-- col-->
            <div class="col col-lg-4 bordure">
              <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="poly" coords="155,645,150,760,55,770,56,800,320,800,320,645" href="#" alt="vers a"/>
                     <p>texte</p>
                     </map>
               </p>
            </div>
            <!-- col-->
            <div class="col col-lg-2 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                    
                     </map>
               </p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>
                  <map name="zone_id_zone" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="435,645,430,760,340,770,345,800,600,800,600,645" href="#" alt="vers a"/>
                   
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
   </main>

   <div  class="modal fade" id="mamodale" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title">Inserez votre texte</h5>
           <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form type="POST" action="{{route('ajoutarticle')}}">
         <div class="modal-body">
            <p>Poulet</p>
         </div>
         </form>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
           <button type="button" class="btn btn-primary">Accepter</button>
         </div>
         </div>
      </div>
   </div>

   <script type="text/javascript">
      //boucle switch pour définir les conditions
      $('#mamodale').on('show.bs.modal', function(event)
      {
         var zone = $(event.relatedTarget).data('zone');   
         var type = $(event.relatedTarget).data('type');
         
            switch(type)
            {    
               //choix titre    
               case 1:
                  $(this).find('.modal-body p').html("<label>Entrez votre titre<input type='text' name='contenu'></label>");
               break;
               case 2:
                   $(this).find('.modal-body p').html("<textarea id='contenu' name='contenu'>Entrez votre texte</textarea>");
                   CKEDITOR.replace('contenu');
               break;
               case 3:
                  $(this).find('.modal-body p').html("<label>Entrez votre inmage<input  type='file' name='contenu'></label>");    
               break;
                  default :
                  $(this).html("Aucune des conditions n'est remplies");            
          }
      } 
);
   </script>
@endsection