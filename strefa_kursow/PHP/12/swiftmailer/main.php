<?php

require "vendor/autoload.php";

$transport = new Swift_SmtpTransport("ssl://smtp.gmail.com", 465);
$transport->setUsername("jantestowy12345678");
$transport->setPassword("qk;w3!yH&>;8.S68");

$mailer = new Swift_Mailer($transport);

$message = new Swift_Message();
$message
    ->setFrom("jantestowy12345678@gmail.com")
    ->setTo("jantestowy12345678@gmail.com")
    ->setSubject("Hello!")
    ->setBody("<h1>Witam Szanownego Pana!</h1>")
    ->setContentType("text/html");

$mailer->send($message);
