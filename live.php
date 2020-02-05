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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Titre de la page -->
  <title>Thinker Conférence</title>
</head>
<body>

<!-- Chargement du header sur la page -->
 <?php 
 $page = "live";
 include("header.php") ?>

<div class="all">
    
    <div class="compteur">
    
      <div>
        <span class="compteurtitle">JOURS</span>
        <div class="cases_compteur" id="jours"></div>
      </div>
      <span class="deuxpoints">:</span>
      <div>
        <span class="compteurtitle">HEURES</span>
        <div class="cases_compteur" id="heures"></div>
      </div>
      <span class="deuxpoints">:</span>
      <div>
        <span class="compteurtitle">MINUTES</span>
        <div class="cases_compteur" id="minutes"></div>
      </div>
      <span class="deuxpoints">:</span>
      <div>
        <span class="compteurtitle">SECONDES</span>
        <div class="cases_compteur" id="secondes"></div>
      </div>
    
    </div>

    <div class="live">
    <iframe src="https://player.twitch.tv/?channel=thinkerconf" frameborder="0" allowfullscreen="true" scrolling="no" class="live_live"></iframe>
    <iframe src="https://www.twitch.tv/embed/thinkerconf/chat" frameborder="0" scrolling="no" class="live_chat"></iframe>
    </div>
</div>

<?php include("footer.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
