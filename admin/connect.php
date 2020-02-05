<?php
include("../config.php");

$sql1 = "SELECT * FROM message";
$query1 = $pdo->prepare( $sql1 ); // Etape 1 : Préparation de la requête
$query1->execute(); // Etape 2 : exécution de la requête

while ( $line1 = $query1->fetch() ) {
        $mail = $line1[ 'email' ];
        $message = $line1[ 'message' ];

        echo $mail.$message;
        echo "<br>";

}