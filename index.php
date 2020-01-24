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
 $page = "accueil";
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
          <a href="https://twitter.com/thinkerconf"><img src="assets/img/icone/twitter.svg" alt="logo-twitter"
              class="reseau"></a>
          <a href="https://www.facebook.com/thinkerconf"><img src="assets/img/icone/facebook.svg" alt="logo-facebook"
              class="reseau"></a>
          <a href="https://www.instagram.com/thinker_conference/"><img src="assets/img/icone/instagram.svg"
              alt="logo-instagram" class="reseau"></a>
        </div>
      </div>
    </div>

    <div id="accueil" class="accueil" id="accueil">
      <div class="inner-accueil">
        <div class="text-inner-accueil">
          <p class="text-conference">conférence</p>
          <p class="text-thinker">thinker</p>
        </div>
        <div class="fleches">
          <img src="assets/img/icone/fleche-g.svg" alt="fleche1" class="img-fleche fleche-gauche">
          <img src="assets/img/icone/fleche-d.svg" alt="fleche2" class="img-fleche fleche-droite">
        </div>
        <div class="reservation">
          <a href="billeterie.php" class="btn-res"><img src="assets/img/icone/caddie.svg" alt="caddie-reserv">Je prends
            <span> mes places</span></a>
        </div>
      </div>
    </div>

    <div class="apropos" id="apropos">

      <div class="trois-items">
        <div class="rassembler">
          <img src="assets/img/icone/rassembler.svg" alt="rassembler" class="img-trois-items">
          <span class="titre-trois-items">
            rassembler
          </span>
          <hr>
          <p class="texte-trois-items">THINKER a pour but de <span>rassembler</span> les personnes autour de la
            curiosité intellectuelle lors de conférences qui explorent nombre de différents sujets. Cette année, ils
            sont tournés vers l'esprit et toutes ses facettes. </p>
        </div>
        <div class="explorer"><img src="assets/img/icone/explorer.svg" alt="explorer" class="img-trois-items">
          <span class="titre-trois-items">
            explorer
          </span>
          <hr>
          <p class="texte-trois-items">THINKER recherche à <span>explorer</span> chaque sujet et a le traiter de façon
            innovante et intéressante afin de proposer une expérience unique à toute personne présente sur place, en
            stream et sur les replays.</p>
        </div>
        <div class="transmettre"><img src="assets/img/icone/transmettre.svg" alt="transmettre" class="img-trois-items">
          <span class="titre-trois-items">
            transmettre
          </span>
          <hr>
          <p class="texte-trois-items">THINKER a la profonde volonté de <span>transmettre</span> du savoir et de
            cultiver la curiosité intellectuelle. </p>
        </div>
      </div>

      <div class="deux-items">
        <p>Thinker est un événement qui vise à transmettre et cultiver la curiosité intellectuelle. L’événement
          s’articule autour de minies conférences d’une quinzaine de minutes sur scène et retransmit en direct. Chaque
          conférence sera animée par des conférenciers experts en la matière.

        </p>
        <p>L’édition 2020 aura pour thème principale « l’esprit » dans toutes ses formes : esprit photographique,
          intelligence artificielle, musicologie, hypnose thérapeutique, mentalisme ... </p>
      </div>


    </div>

    <div class="conferences" id="conferences">

      <div class="affichage_conf">
        <?php
      $idaleatoire = rand(1,4);

      $sql1 = "SELECT * FROM conference WHERE id = ?";
      $query1 = $pdo-> prepare($sql1);
      $query1-> execute(array($idaleatoire));
   
      while($line1=$query1->fetch()){
        $id1 = $line1['id'];
        $conferencier1 = $line1['conferencier'];
        $titre1 = $line1['titre'];
        $heure1 =$line1['horaire'];
        $url1 = $line1['url_photo'];

     echo '
     <a href="conference.php?id='.$id1.'" class="conferenceenavant conf">
       <div class="div_conf">
        <img src="'.$url1.'" alt="image de fond" class="backgroundconf">
         <div class="overlay">
            <div class="underoverlay">
              <span class="titreconf">'.$titre1.'</span>
              <span class="nomorateur">Par : '.$conferencier1.'</span>
              <span class="btn-ensavoirplus">En savoir +</span>
            </div>
         </div>
       </div>
     </a>
     
     
     ';}

       $sql = "SELECT * FROM conference";
       $query = $pdo-> prepare($sql);
       $query-> execute();
    
       while($line=$query->fetch()){
         $id = $line['id'];
         $conferencier = $line['conferencier'];
         $titre = $line['titre'];
         $heure =$line['horaire'];
         $url = $line['url_photo'];

      echo '
      <a href="conference.php?id='.$id.'" class="conference'.$id.' conf">
        <div class="div_conf">
        <img src="'.$url.'" alt="image de fond" class="backgroundconf">
          <div class="overlay">
          <div class="underoverlay">
            <span class="titreconf">'.$titre.'</span>
            <span class="nomorateur">Par : '.$conferencier.'</span>
              <span class="btn-ensavoirplus">En savoir +</span>
              </div>
          </div>
        </div>
      </a>
      
      
      ';

       }
    ?>


      </div>


    </div>
    
    <div class="contact">
    <div class="formcontact" id="contact">
      <h2>Contactez-nous</h2>
      <form method="POST" action="envoi.php">
        
        <input type="email" name="mail" placeholder="Votre email"
          value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
        <textarea name="message"
          placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
        <input type="submit" value="Envoyer !" name="mailform" />
      </form>
      <?php if(isset($msg)) {
         echo $msg;
      }
      ?>

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