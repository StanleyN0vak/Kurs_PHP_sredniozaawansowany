<?php
//
//$d = new DateTimeImmutable();
//
//var_dump($d->format("c"));
//
//$e = $d->sub(new DateInterval("P1D"));
//
//var_dump($d->format("c"));
//
//var_dump($e->format("c"));

function format(DateTimeInterface $d) {
    echo $d->format("c") . PHP_EOL;
}

format(new DateTime());
format(new DateTimeImmutable());