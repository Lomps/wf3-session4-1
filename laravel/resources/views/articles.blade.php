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
</main>
@endsection