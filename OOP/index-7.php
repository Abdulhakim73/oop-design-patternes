<?php

// so that our code is not repeated for each class
trait TraitAnimal 
{
    public function eat($food_name)
    {
        return "eating $food_name";
    }
}

interface Animal 
{
    public function makeSound();
}

class Dog
{
    use TraitAnimal;

    public function makeSound():string
    {
        return "wow wow";
    }
}

class Cat 
{
    use TraitAnimal;

    public function makeSound():string
    {
        return "meow meow";
    }
}

$cat = new Cat;
echo $cat->eat("corn");