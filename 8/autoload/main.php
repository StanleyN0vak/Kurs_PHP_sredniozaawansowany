<?php

include "autoloader.php";

$a = new Foo();
$b = new Model\Bar();
$c = new Model\Based\Bas();

echo $a->getName() . PHP_EOL;
echo $b->getName() . PHP_EOL;
echo $c->getName() . PHP_EOL;