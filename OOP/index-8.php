<?php

class Dog
{
    public $name;
    public static $weight = "25kg";


    public function bark()
    {
        //get static attribute
        return self::$weight;
    }

    public static function eat()
    {
        return "eat meat";
    }
}

$dog = new Dog;
echo $dog->bark();
//get static method
echo Dog::eat();