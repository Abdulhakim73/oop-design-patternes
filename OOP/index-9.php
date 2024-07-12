<?php

class Cat 
{
    //we can't change attribute on this variable
    const BREED = "germany";

    public function bark()
    {
        //get const variable
        return self::BREED;
    }
}

//get const variable
echo Cat::BREED;