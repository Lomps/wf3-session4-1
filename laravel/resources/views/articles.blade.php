@extends('layouts.mainlayout')

@section('title')

@section('contenu')
<main>
	<!-- Container de la page 1-->
   <section class="container bgWhite mt-1">
   	<!-- Row1 -->
   		<div class="row text-center">
   			<!-- col-->
   			<div class="col col-lg-6 bordure">
   				<p>Zone Titre</p>
                <p>
                  <map name="p1z1" id="texte1">
                     <!--informations de votre map-->
                     <area shape="rect" coords="10,10,20,30" href="#" alt="vers a"/>
                     <p>
                     <a href="#"data-toggle="modal" data-target="#exampleModal">Cliquer</a>
                  </p>
                     </map>
               </p>
   			</div>
   			<!-- col-->
   			<!-- col-->
   			<div class="col col-lg-6 bordure">
   				<p>Zone Titre</p>
   			</div>
   			<!-- col-->
   		</div>
   	<!-- /Row1 -->
   	<!-- Row2 -->
   		<div class="row text-center">
               <!-- col-->
            <div class="col col-lg-8 bordure">
               <p>Zone Titre</p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>Zone Titre</p>
            </div>
            <!-- col-->   			
   		</div>
   	<!-- /Row2 -->
   	<!-- Row3 -->
   		<div class="row text-center">
   			<div class="col text-center">
               <p>Zone titre</p>      
            </div>
   		</div>
   	<!-- /Row3 -->
   	<!-- Row4 -->
   		<div class="row text-center">
   			      <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
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
               <p>Zone Texte</p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>Zone Photo</p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>Zone Photo</p>
            </div>
            <!-- col-->
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
            </div>
            <div class="col col-lg-6 offset-6 bordure">
               <p>Zone Photo</p>
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
               <p>Zone photo</p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-6 bordure">
               <p>Zone Texte</p>
            </div>         
         </div>
          <div class="row text-center">
         <!-- col-->
         <div class="col col-lg-4 bordure">
            <p>Zone Texte</p>
         </div>
         <!-- col-->
         <!-- Row4 -->
         <div class="col col-lg-4 bordure">
            <p>Zone Texte</p>
         </div>
         <div class="col col-lg-4 bordure">
            <p>Zone Texte</p>
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
               <p>Zone Texte</p>              
            </div>
            <!-- col-->
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>Zone Photo</p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->
         </div>
      <!-- /Row1 -->
      <!-- Row2 -->
         <div class="row text-center">                      
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>
            <div class="col col-lg-8 bordure">
               <p>Zone Photo</p>
            </div>
            <!-- col-->          
         </div>
           <div class="row text-center">  
            <!-- col-->           
            <div class="col bordure">
               <p>Zone Titre</p>
            </div>
            <!-- col-->          
         </div>
      <!-- /Row2 -->
      <!-- Row3 -->
         <div class="row text-center">
            <!-- col-->
            <div class="col col-lg-2 bordure">
               <p>Zone Photo</p>
            </div>
            <!-- col-->
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>
            <!-- col-->
            <div class="col col-lg-2 bordure">
               <p>Zone Photo</p>
            </div>
            <div class="col col-lg-4 bordure">
               <p>Zone Texte</p>
            </div>         
         </div>
      <!-- /Row3 -->
   </section>
   <!-- /Container de la page4-->

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">New message</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form>
             <div class="form-group">
               <label for="recipient-name" class="col-form-label">Recipient:</label>
               <input type="text" class="form-control" id="recipient-name">
             </div>
             <div class="form-group">
               <label for="message-text" class="col-form-label">Message:</label>
               <textarea class="form-control" id="message-text"></textarea>
             </div>
           </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Send message</button>
         </div>
       </div>
     </div>
   </div>
</main>

   <script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var recipient = button.data('whatever') // Extract info from data-* attributes
     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     var modal = $(this)
     modal.find('.modal-title').text('New message to ' + recipient)
     modal.find('.modal-body input').val(recipient)
   })
   </script>
@endsection