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

  <!-- Chargement des fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Titre de la page -->
  <title>Thinker Conférence</title>
</head>
<body>

<!-- Chargement du header sur la page -->
 <?php 
 $page = "accueil";
 include("header.php") ?>


<div class="all">
  <div class="infos-side">

  </div>

  <div id="accueil" class="accueil">
    <div class="inner-accueil">
      <div class="text-inner-accueil">
        <p class="text-conference">conférence</p>
        <p class="text-thinker">thinker</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
