<?php

class Product {
    private $name;

    private $price;

    private $type;

    public function __construct(string $name, float $price, string $type = "product")
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    public function __destruct() {

    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function getPrice() : float {
        return $this->price;
    }
}

$book = new Product("Book", 10.99, "book");

var_dump($book);

class Book extends Product {
    public function __construct(string $name, float $price) {
        parent::__construct($name, $price, "book");
    }
}

$book2 = new Book("Book2", 21.99);

var_dump($book2);
