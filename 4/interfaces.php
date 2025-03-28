<?php

interface NameInterface {
    public function getName() : string;
}

interface TypeInterface {
    public function getType() : string;
}

interface SizeInterface {}

class Car implements NameInterface, TypeInterface {
    public function getName(): string {
        return "Ford";
    }

    public function getType() : string {
        return "Kombi";
    }
}

class Kombi implements NameInterface {
    public function getName(): string {
        return "Ford Focus Kombii";
    }
}

$car = new Car();

function getCarName(NameInterface $car) {
    return $car->getName();
}

echo getCarName($car) . PHP_EOL;

$kombi = new Kombi();

echo getCarName($kombi) . PHP_EOL;