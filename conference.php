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

$sql = "SELECT * FROM conference WHERE id=?";
$query = $pdo-> prepare($sql);
$query-> execute(array($_GET['id']));

while($line=$query->fetch()){
  $id = $line['id'];
  $conferencier = $line['conferencier'];
  $titre = $line['titre'];
  $heure =$line['horaire'];
  $description = $line['description'];
  $url = $line['url_photo'];
}
?>


<div class="all conferenceunique">
  <div class="leftconf">
    <div style="background : url('<?php echo $url ?>'); background-repeat : no-repeat; background-size : cover; background-position : center;">
      <div class="overlayconf">
        <span class="conftitle"><?php echo $titre?></span>
        <span class="confconferencier">Par <?php echo $conferencier?></span>
      </div>
    </div>
    
  </div>
  <div class="rightconf">
    <div>
      <h2 class="horairetitle">HORAIRE : </h2>
      <span class="horaireconf"><?php echo $heure ?></span>
    </div>

    <div>
     <h2 class="descriptiontitle">DESCRIPTION : </h2>
     <p class="descconf"><?php echo $description?></p>
    </div>
  </div>

  <div class="bottomconf">
    
  </div>
  

</div>


<?php 
include('footer.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>