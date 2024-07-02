<?php

try {
    $a = 1;
    $a->getId();
} catch (Exception $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}

echo 2;