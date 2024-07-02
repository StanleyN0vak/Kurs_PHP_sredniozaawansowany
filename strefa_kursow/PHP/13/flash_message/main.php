<?php

require "vendor/autoload.php";

$session = new \Symfony\Component\HttpFoundation\Session\Session();
$session->start();

$session->getFlashBag()->add("info", time());
if (date("s") % 2) {
    $session->getFlashBag()->add("info", "Ta sekunda jest nieprzysta");
}

foreach ($session->getFlashBag()->get("info") as $message) {
    echo "<p>{$message}</p>";
}
