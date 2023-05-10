<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from='gabriellllla.github.io';
$email_subject = 'Nou mesaj';
$email_body="User Name: $name.\n".
            "User Phone: $phone.\n".
            "User Email: $email.\n".
            "User Message: $message.\n";

$to = 'marcugabriella02@gmail.com';

$headers = "Form: &email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>
