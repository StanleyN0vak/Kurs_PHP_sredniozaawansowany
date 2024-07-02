<?php

require "MyException.php";

try {
    throw new MyException("Mój wyjątek");
} catch (MyException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo "Ups";
}
