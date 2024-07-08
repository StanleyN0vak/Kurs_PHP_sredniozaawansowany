<?php

$a = pi();

echo "Round: " . round($a);
echo PHP_EOL;
echo "Floor: " . floor($a);
echo PHP_EOL;
echo "Ceil: " . ceil($a);
echo PHP_EOL;

echo "-------" . PHP_EOL;
echo "ABS: " . abs(-2) . PHP_EOL;
echo "Min: " . min(1, 2, -1, -100) . PHP_EOL;
echo "Max: " . max(1, 2, -1, -100) . PHP_EOL;
echo "Rand: " . rand(1, 100) . PHP_EOL;