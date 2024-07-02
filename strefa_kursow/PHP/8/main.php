<?php

include "functions.php";
include "Event.php";
include "../4/Event.php";

$event = new Event("123", new DateTime());
$event2 = new Foo\Event();

echo $event->getName() . PHP_EOL;
echo $event2->getName();
