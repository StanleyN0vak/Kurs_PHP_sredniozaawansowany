<?php

require "vendor/autoload.php";

$transport = new Swift_SmtpTransport("ssl://smtp.gmail.com", 465);
$transport->setUsername("mateusztestowy2137");
$transport->setPassword("CebulaIWarstwy1");

$mailer = new Swift_Mailer($transport);

$message = new Swift_Message();
$message
    ->setFrom("mateusztestowy2137@gmail.com")
    ->setTo("szymanski.mateusz001@gmail.com")
    ->setSubject("Hello!")
    ->setBody("Witam szanownego Pana!");

$mailer->send($message);