<?php 

interface Animal 
{
    //these methods also have to be on implement classes
    public function makeSound();
    public function eating();
}

class Dog implements Animal 
{
    public function makeSound()
    {
        return "vov vov";
    }
    
    public function eating()
    {
        return "eating meat";
    }
}