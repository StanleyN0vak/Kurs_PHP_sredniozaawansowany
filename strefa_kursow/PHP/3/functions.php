<?php

$function = function ($a) {
    return $a > 0;
};

$a = [1, 2, -10, 0, -1];

var_dump($a);

$b = array_filter($a, $function);

var_dump($b);
