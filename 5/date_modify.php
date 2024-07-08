<?php

$d = new DateTime();

//var_dump($d->diff(new DateTime("2024-01-01")));

//var_dump($d->modify("-1 day"));

var_dump($d->sub(new DateInterval("P2DT1H")));

$a = new DateTimeImmutable();

var_dump($a->format("c"));

$e = $a->sub(new DateInterval("P1DT1H"));

var_dump($a->format("c"));
var_dump($e->format("c"));

function format(DateTimeInterface $d){
    echo $d->format("c") . PHP_EOL;
}

format(new DateTime());
format(new DateTimeImmutable());