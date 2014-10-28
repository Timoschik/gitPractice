<?php

namespace Shelter;


class Dog extends Animal
{
    public function __construct($name) {
        parent::__construct($name);
    }

    static public function say() {
        echo "woof-woof!";
    }
}
