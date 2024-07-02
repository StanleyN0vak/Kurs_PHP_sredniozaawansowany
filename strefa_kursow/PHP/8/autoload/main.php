<?php

include "autoloader.php";

$a = new Foo();
$b = new Model\Bar();

echo $a->getName() . PHP_EOL;
echo $b->getName();
