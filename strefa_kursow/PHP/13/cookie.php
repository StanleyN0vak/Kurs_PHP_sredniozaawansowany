<?php

if (empty($_COOKIE["name"])) {
    setcookie("name", "Jan");
}

var_dump($_COOKIE);
