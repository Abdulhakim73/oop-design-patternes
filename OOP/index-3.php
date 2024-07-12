<?php

final class Government
{
    final public function mygovern(){
        return "my government";
    }
}

//parent
class Fruit 
{
    public function eat(): string
    {
        return "eat what";
    } 
}

//child
class Banana extends Fruit 
{
    //overriding eat method
    public function eat(): string
    {
        return "i ate banana";
    }
}

$fruit = new Banana;
echo $fruit->eat();