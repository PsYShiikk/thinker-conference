

<?php
include("config.php");

$mail = $_POST['mail'];
$message = $_POST['message'];


$query = $pdo->prepare('INSERT INTO message(email, message) VALUES(:mail, :message)');
$query->bindValue(':mail', $mail, PDO::PARAM_STR);
$query->bindValue(':message', $message, PDO::PARAM_STR);

$query->execute();

header('Location: index.php');



?>

