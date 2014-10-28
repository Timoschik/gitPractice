<?php

namespace Shelter;


class Cat extends Animal
{
    public function __construct($name) {
        parent::__construct($name);
    }

    static public function say() {
        echo "meow-meow";
    }


}
