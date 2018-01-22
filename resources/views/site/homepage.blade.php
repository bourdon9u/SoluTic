@extends('layout.blog')

@section('content')

<div class="accueil">
    <img src="../img/LogoSansFond.png" class="logohome">
    <h1> Bienvenue sur notre projet SoluTic!</h1>
    <hr>
    <a class="scroll down-arrow" id="about" href="#"><img src="../img/site/down-arrow.png"></a>
</div>

<!-- A propos de nous -->
<section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2 class="text-lg-left">A propos</h2>
          <hr>
          <h3><strong>SoluTic</strong>, Application de gestion des incidents</h3>
          <p> 
            Cette application a été créée dans le cadre d'un projet tutoré en Licence professionnelle I2M. 
            Nous, Loïs Bourdon et Alexandre Vogt, avons choisi de développer une application web... (à développer)
          </p>        
        </div>
        <div class="col-6 hidden-md-down">
          <img class="image" src="../img/fondAccueil.jpg" alt="fondAccueil.jpg">
        </div>
      </div>
    </div>
  </section>

  <!-- Description du projet -->
  <div class="description">
      <h2>Une application?</h2>
      <hr>
      <p>
        En effet, SoluTic est une application de gestion des incidents, mettant en relation un client et une personne de l’entreprise qui sera chargée de résoudre le problème grâce à un ticket. (à développer)
      </p>
  </div>
  <button class="btn btn-5 btn-5b icon-cog" style="display: block;margin : auto;"><span>Un problème?</span></button>
  <!-- <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-envelop" viewBox="0 0 32 32">
            <title>envelop</title>
            <path d="M29 4h-26c-1.65 0-3 1.35-3 3v20c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-20c0-1.65-1.35-3-3-3zM12.461 17.199l-8.461 6.59v-15.676l8.461 9.086zM5.512 8h20.976l-10.488 7.875-10.488-7.875zM12.79 17.553l3.21 3.447 3.21-3.447 6.58 8.447h-19.579l6.58-8.447zM19.539 17.199l8.461-9.086v15.676l-8.461-6.59z"></path>
        </symbol>
    </defs>
  </svg>
  <div class="clearfix mhl ptl">
      <div class="glyph fs1">
          <svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg>
      </div>
  </div> -->
<script defer src="svgxuse.js"></script>
@endsection 

