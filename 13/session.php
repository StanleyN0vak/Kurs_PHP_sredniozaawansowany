<?php

session_start();

/*
$_SESSION["app"][] = time();
*/
var_dump($_SESSION);

if (isset($_SESSION["app"]["isLogged"])){
    echo '<a href="logout.php">Wyloguj</a><br>';
} else {
    echo '<a href="login.php">Zaloguj</a><br>';
}

?>