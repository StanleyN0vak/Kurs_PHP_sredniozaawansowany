<?php

spl_autoload_register(function($name) {
    $name = str_replace(["/", "\\"], DIRECTORY_SEPARATOR, $name);
    include "src" . DIRECTORY_SEPARATOR . "{$name}.php";
});