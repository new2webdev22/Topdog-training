<?php

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "jamiewebdev22@gmail.com";
$subject = "Mail From Website";

$headers = "From: ".$username. "\r\n" .
"CC: jf_22_fabris@hotmail.com";

$txt = "You have recieved an email from ".$username ."\r\nEmail: " .$email ."\r\n
Message: ". $message;

if($email!=NULL){
  mail($to, $subject, $txt, $headers);
}

header('Location:thankyou.html');





?>