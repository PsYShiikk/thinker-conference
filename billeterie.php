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
 $page = "billeterie";
 include("header.php") ?>

<div class="all billeterie">
<iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/bureau-des-etudiants-bde-metiers-du-multimedia-et-de-l-internet-mmi/evenements/thinker-conference-1/widget" onload="window.scroll(0, this.offsetTop)"></iframe>
</div>

<?php include("footer.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
