<?php

use Symfony\Component\HttpFoundation\Session\Session;

require "vendor/autoload.php";

$session = new Session();
$session->start();

$session->getFlashBag()->add("info", time());
if(date("s") % 2) {
    $session->getFlashBag()->add("info", "Ta sekunda jest nie parzysta");
}

foreach ($session->getFlashBag()->get("info") as $message){
    echo "<p>{$message}</p>";
}