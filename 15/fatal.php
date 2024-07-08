<?php

try {
    $a = 1;
    $a->getID();
} catch (Exception $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}

echo 2;