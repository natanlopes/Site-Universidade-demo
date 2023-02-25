<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'natan1918@gmail.com';
$email_subject = 'Novo email ';

$email_body = "usuario de Nome: $name.\n".
                "Usuario de Email: $eisitor_email.\n".
                "Subject: $subject.\n".
                "Usuario com Menssagem: $message.\n ";

$to = 'natan1918@gmail.com';
$headers = "From: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n ";
mail($to,$email_subject,$email_body ,$headers);
header("Lacation: contato.html");

?>