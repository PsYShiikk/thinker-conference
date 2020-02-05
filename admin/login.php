<?php

$identifiant = $_POST['identifiant'];
$mot_de_passe= $_POST['mot_de_passe'];


if ($identifiant == 'admin' && $mot_de_passe == 'azerty'){
    header('Location:http://localhost/thinker/thinker-conference/admin/connect.php');
}
else{
    header('Location:http://localhost/thinker/thinker-conference/admin/index.php');
}