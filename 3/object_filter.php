<?php

$a = new stdClass();
$a->value = -1;
$a->name = "a";

$b = new stdClass();
$b->value = 3;
$b->name = "b";

$c = new stdClass();
$c->value = 10;
$c->name = "c";

$d = [$a, $b, $c];
var_dump($d);

$e = array_filter(
    $d,
    function (stdClass $a){
        return $a->value > 0;
    }
);

var_dump($e);