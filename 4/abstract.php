<?php

interface CommandNameInterface {
    public function getName();
}

abstract class Command implements CommandNameInterface {
    abstract public function getName();

    public function run(){
        echo "Running command {$this->getName()}";
    }
}

class NewCommand extends Command {
    public function getName()
    {
        return "NewCommand";
    }
}

$a = new NewCommand();
$a->run();