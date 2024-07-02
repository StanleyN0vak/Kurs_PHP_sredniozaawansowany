<?php

$a = "Jakiś tekst";

echo "strlen " . strlen($a) . PHP_EOL;
echo "mb_strlen " . mb_strlen($a) . PHP_EOL;
echo "strtoupper " . strtoupper($a) . PHP_EOL;
echo "mb_strtoupper " . mb_strtoupper($a) . PHP_EOL;
echo "mb_strtolower " . mb_strtolower($a) . PHP_EOL;

echo "----" . PHP_EOL;

$b = "  Jakiś tekst ";
echo "trim " . trim($b) . PHP_EOL;
echo "str_replace " . str_replace("tekst", "kwiatek", $b) . PHP_EOL;