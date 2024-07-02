<?php

$a = [1, 2, 4, 8, 3, 19, -3];

$b = range(1, 20, 3);

$c = array_intersect($a, $b);

var_dump($c);
