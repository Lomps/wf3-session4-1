@extends('layouts.mainlayout')

@section('title')

@section('contenu')
<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>
   <!-- corps de la page-->
   <main>
   @if(session('message'))
      <div class="alert alert-success text-center">
        {{ session('message') }}
      </div>
   @endif     
	<!-- Container de la page -->
   <section class="container bgWhite mt-1">
   	<!-- Row1 -->
   	<div class="row text-center">
			<!-- col-->    
                      
         <img src="{{asset('assets/img/maquette_p1.png') }}" alt="Maquette" usemap="#maquette" >
         <map name="maquette">
             @foreach ($zone as $art)
            <area shape="{{$art->forme}}" coords="{{$art->coordonnees}}" href="#" data-toggle="modal" data-target="#mamodale" data-type="{{$art->type_donnee}}"" data-zone="{{$art->id_zone}}"/>                                    
      @endforeach      
      </map>
      <nav aria-label>
         {{asset('assets/img/') }}->links('vendor.pagination.bootstrap-4') }}
      </nav>   
		<!-- ajout du bouton valider-->   			
      <div class="col text-center">
          <button type="submit" id="myForm" class="btn-primary btn">Valider</button>
      </div>   
   </section>
   <!-- /Container de la page-->
   </main>
   <!-- Modale -->
   <div  class="modal fade" id="mamodale" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title">Inserez votre contenu</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form method="POST" action="{{route('ajoutarticle')}}" enctype="multipart/form-data">          
          <input type="hidden" name="publication_id_publication" value="1">  
            {{ csrf_field() }}             
          <div class="modal-body">              
            <p></p>
         </div>         
         <div class="modal-footer">           
           <button type="submit" id="confirm" class="btn btn-primary">Accepter</button>
         </form>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
         </div>
         </div>
      </div>
   </div>

   <script type="text/javascript">
      //quand tu clique tu fais une varaible qui recupere la valeur et tu fais .html(valeur)   
      
      //boucle switch pour définir les conditions
      $('#mamodale').on('show.bs.modal', function(event)
      {
         //déclarations des varaibles 
         var zone = $(event.relatedTarget).data('zone');  
         var type = $(event.relatedTarget).data('type');
         var image = $(this).attr('src');         
         
         switch(type)
         {    
            //choix titre    
            case 1:
               $(this).find('.modal-body p').html("<label>Entrez votre titre<input type='text' name='contenu'></label><input type='hidden' name='zone_id_zone' value='"+zone+"'><input type='hidden' name='type' value='"+type+"'>");
            break;
            //ckeditor pour inserer un texte
            case 2:
                $(this).find('.modal-body p').html("<textarea id='contenu' name='contenu'>Entrez votre texte</textarea><input type='hidden' name='zone_id_zone' value='"+zone+"'><input type='hidden' name='type' value='"+type+"'>");
                CKEDITOR.replace('contenu');
            break;
            //inserer une image
            case 3:
               $(this).find('.modal-body p').html("<label>Entrez votre image<input  type='file' name='contenu'></label><input type='hidden' name='zone_id_zone' value='"+zone+"'><input type='hidden' name='type' value='"+type+"'>");    
            break;
               default :
               $(this).html("Aucune des conditions n'est remplies");            
         }
      });
// Cette fonction gère l'ajout du texte saisi par l'utilisateur 
$('#confirm').on('click',ajoutarticle);

function ajoutarticle()
{

   var type = $("#type").val();
   var contenu = $("#contenu").val();   ;
   var zone_id_zone = $("#zone_id_zone").val();   
   $.ajax
   (
      {
      url: "{{route('ajoutarticle')}}",
      type: "POST",
      data: "type="+type+"&contenu="+"&zone_id_zone="+zone_id_zone
      }
   )
     .done(function(reponse)
     {
        $("#confirm").html("");

     })
     .fail(function(error)
     {
        console.log(error);
     });      
}
   </script>
@endsection

