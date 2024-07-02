<?php

session_start();

var_dump($_SESSION);

if (isset($_SESSION["app"]["isLogged"])) {
    echo '<a href="logout.php">wyloguj</a>';
} else {
    echo '<a href="login.php">zaloguj</a>';
}

?>
