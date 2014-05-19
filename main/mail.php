<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$graveyadmail = "contato@graveyard-studios.com";


$message = wordwrap($message, 70, "\r\n");
mail($graveyadmail, '[Formulario site] '.$subject, $message);

header( "Location: index.php" );
?>