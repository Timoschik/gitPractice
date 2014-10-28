<?php

namespace Shelter;


abstract class Animal implements CanSay
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
