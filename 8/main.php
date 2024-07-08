<?php

include "functions.php";
include "event.php";
include "../4/Event.php";

echo add(2, 3) . PHP_EOL;

$event = new Event("123", new DateTime());

$event2 = new Foo\Event();

echo $event->getName() . PHP_EOL;

echo $event2->getName() . PHP_EOL;