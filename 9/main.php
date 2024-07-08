<?php

use Ramsey\Uuid\Uuid;

require "vendor/autoload.php";

$foo = new Foo();

echo $foo->getName() . PHP_EOL;

echo Uuid::uuid4() . PHP_EOL;

$bar = new Model\Bar();

echo $bar->getName() . PHP_EOL;