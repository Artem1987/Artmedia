<?php

$recepient = "xortica87@gmail.com";
$sitename = "webjedi.com.ua";

$name = trim($_POST["fname"]);
$surname = trim($_POST["lname"]);
$email = trim($_POST["email"]);
$text = trim($_POST["message"]);
$message = "Имя: $name \nФамилия: $surname \nEmail: $email \nСообщение: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
if($name!=""&&$surname!=""&&$email!=""&&$text!=""){
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
}
?>

