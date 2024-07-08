<?php

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

require "vendor/autoload.php";

if ($_POST){
    $validator = Validation::createValidator();
    $errors = [];
    $errors[] = $validator->validate(
        $_POST["name"],
        [
            new NotBlank(),
            new Length(["min" => 3])
        ]
    );
    $errors[] = $validator->validate(
        $_POST["email"],
        [
            new NotBlank(),
            new Email()
        ]
    );
    $errors[] = $validator->validate(
        $_POST["body"],[
            new NotBlank()
        ]
    );

    $isValid = true;
    foreach ($errors as $error){
        if ($error->count() > 0){
            $isValid = false;
            break;
        }
    }

    if (!$isValid) {
        echo "Formularz jest nieprawidłowy";
        exit;
    }

    $transport = new Swift_SmtpTransport("ssl://smtp.gmail.com", 465);
    $transport->setUsername("mateusztestowy2137");
    $transport->setPassword("CebulaIWarstwy1");
        
    $mailer = new Swift_Mailer($transport);

    $message = new Swift_Message();
    $message
        ->setFrom($_POST["email"])
        ->setTo('darkmarek2@gmail.com')
        ->setSubject("Wiadomość z formularza kontaktowego")
        ->setBody("<h1>Masz nową wiadomość od {$_POST['name']}:</h1><br>{$_POST['body']}")
        ->setContentType("text/html");

    $mailer->send($message);
}