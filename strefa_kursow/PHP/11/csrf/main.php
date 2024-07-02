<?php

use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManager;

require "vendor/autoload.php";

$csrfProvider = new CsrfTokenManager();

if ($_POST) {
    $token = new CsrfToken("main", $_POST["token"]);
    var_dump($csrfProvider->isTokenValid($token));
}

$csrf = $csrfProvider->getToken("main")->getValue();

?>

<form method="post">
    <p><?= $csrf ?></p>
    <input type="hidden" name="token" value="<?= $csrf ?>">
    <input type="submit">
</form>
