<?php

class User {
    const TABLE_NAME = "users";
    private $name;

    public function __construct(string $name) {
        $this->name = $name;

        static::TABLE_NAME;
    }
}

echo User::TABLE_NAME;