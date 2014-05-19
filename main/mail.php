<?php
include('Mail.php');
$mail = Mail::factory("mail");

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$graveyadmail = "contato@graveyard-studios.com";

$message = wordwrap($message, 70, "\r\n");

$headers = array("From"=>$graveyadmail, "Subject"=>'[Formulario site] '.$subject);
$mail->send($graveyadmail, $headers, $message);

header( "Location: index.php" );
?>