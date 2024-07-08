<?php

$s = "Jakiś tekst";

echo "strlen: " . strlen($s) . PHP_EOL;
echo "mb_strlen: " . mb_strlen($s) . PHP_EOL;
echo "strtoupper: " . strtoupper($s) . PHP_EOL;
echo "mb_strtoupper: " . mb_strtoupper($s) . PHP_EOL;
echo "mb_strtolower: " . mb_strtolower($s) . PHP_EOL;

echo "---------\n";
$b = "  Jakiś tekst  ";
echo "Trim: " . trim($b) . PHP_EOL;
echo "str_replace: " . str_replace("k", "9", $b) . PHP_EOL;
echo "str_replace: " . str_replace("tekst", "kwiatek", $b) . PHP_EOL;