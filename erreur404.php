<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Icone du site -->
  <link rel="shortcut icon" href="assets/img/logo/icon_thinker.png" type="image/x-icon">
  <link rel="icon" href="assets/img/logo/icon_thinker.png" type="image/x-icon">

  <!-- Chargement des styles -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <!-- Chargement des fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <!-- Titre de la page -->
  <title>Thinker Conférence</title>
</head>

<body>

  <!-- Chargement du header sur la page -->
  <?php
 $page = "none";
 include("config.php");
 include("header.php");
?>

<div class="all">
<div class="infos-side">
      <div class="infos-generales">
        <img src="assets/img/date/date.svg" class="date"
          alt="date de l'evenement : le jeudi 19 mars à 18h30, médiathèque Robert Cousin à Lens">
      </div>
      <div class="reseaux-sociaux">
        <span class="titre-reseaux">Suivez nous sur</span>
        <div>
          <a href="https://twitter.com/thinkerconf" target="_blank"><img src="assets/img/icone/twitter.svg" alt="logo-twitter"
              class="reseau"></a>
          <a href="https://www.facebook.com/thinkerconf" target="_blank"><img src="assets/img/icone/facebook.svg" alt="logo-facebook"
              class="reseau"></a>
          <a href="https://www.instagram.com/thinker_conf/" target="_blank"><img src="assets/img/icone/instagram.svg"
              alt="logo-instagram" class="reseau"></a>
        </div>
      </div>
    </div>

    <div id="accueil" class="accueil" id="accueil">
      <div class="inner-accueil">
        <div class="text-inner-accueil">
          <p class="text-conference">erreur</p>
          <p class="text-thinker">404</p>
        </div>
        <div class="fleches">
          <img src="assets/img/icone/fleche-g.svg" alt="fleche1" class="img-fleche fleche-gauche">
          <img src="assets/img/icone/fleche-d.svg" alt="fleche2" class="img-fleche fleche-droite">
        </div>
        <div class="reservation">
          <a href="index.php" class="btn-res">Retour à l'accueil</a>
        </div>
      </div>

      
    </div>

    <div class="reseaux-sociaux-phone">
        <span class="titre-reseaux black">Suivez nous sur</span>
        <div>
          <a href="https://twitter.com/thinkerconf"><img src="assets/img/icone/twitter_b.svg" alt="logo-twitter"
              class="reseau"></a>
          <a href="https://www.facebook.com/thinkerconf"><img src="assets/img/icone/facebook_b.svg" alt="logo-facebook"
              class="reseau"></a>
          <a href="https://www.instagram.com/thinker_conference/"><img src="assets/img/icone/instagram_b.svg"
              alt="logo-instagram" class="reseau"></a>
        </div>
      </div>
    <div class="infos-bottom-phone">
      <div class="infos-generales">
        <img src="assets/img/date/date.svg" class="date"
          alt="date de l'evenement : le jeudi 19 mars à 18h30, médiathèque Robert Cousin à Lens">
      </div>
      
    </div>

</div>


<?php 
include('footer.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>