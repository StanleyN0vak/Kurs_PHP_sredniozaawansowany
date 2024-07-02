<?php

interface NameInterface {
    public function getName() : string;
}

interface TypeInterface {
    public function getType() : string;
}

interface SizeInterface {}

class Car implements NameInterface, TypeInterface {
    public function getName() : string {
        return "Ford";
    }

    public function getType() : string {
        return "Kombi";
    }
}

class Kombi implements NameInterface {
    public function getName() : string {
        return "Ford Focus Kombi";
    }
}

$car = new Car();

function getCarName(NameInterface $car) {
    return $car->getName();
}

//echo getCarName($car);

$kombi = new Kombi();

echo getCarName($kombi);
