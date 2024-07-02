<?php

$a = pi();

echo "round " . round($a);
echo PHP_EOL;
echo "floor " . floor($a);
echo PHP_EOL;
echo "ceil " . ceil($a);
echo PHP_EOL;

echo "----" . PHP_EOL;
echo "abs " . abs(-2) . PHP_EOL;
echo "min " . min(1, 2, -1, -100) . PHP_EOL;
echo "max " . max(1, 2, -1, -100) . PHP_EOL;
echo "rand " . rand(1, 100) . PHP_EOL;