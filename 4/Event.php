<?php

class Event {
    private $name;
    private $date;

    public function __construct(string $name, DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getDate() : DateTime {
        return $this->date;
    }
}