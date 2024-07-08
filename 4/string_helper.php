<?php

class StringHelper {
    public static function toUpper(string $text) : string {
        return mb_strtoupper($text);
    }

    public static function toLower(string $text) : string {
        return mb_strtolower($text);
    }
}

echo StringHelper::toUpper("Hello World!") . PHP_EOL;
echo StringHelper::toLower("Hello World!"). PHP_EOL;