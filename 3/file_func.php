<?php

var_dump(file_exists("math_func.php"));
var_dump(file_exists("abcd.php"));

echo file_get_contents("math_func.php") . PHP_EOL;

echo "----------\n";

file_put_contents("abcd.txt", date("c") . PHP_EOL, FILE_APPEND);
echo file_get_contents("abcd.txt") . PHP_EOL;

mkdir("abcd");

touch("abc.txt");
