<?php

$a = [1, 2, 4, 8, 3, 19, -3];

//rsort($a);

$b = [
    "a" => 1,
    "b" => 2,
    "c" => 3
];

$d = range(1, 10, 2);

//var_dump(in_array(2,$a));
//var_dump(array_key_exists("b", $b));
var_dump($a);
//$c = array_push($a, 100);
//$c = array_pop($a);
$c = array_shift($a);
var_dump($a);
var_dump($c);
var_dump($d);

//$e = array_merge($a, $d);
//$e = array_diff($a, $d);
$e = array_intersect($a, $d);
var_dump($e);