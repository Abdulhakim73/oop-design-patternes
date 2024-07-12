<?php

/* masalan kema suza oladi, matori bor va hk, velasipedda besa bularning hech biri yoq.*/

interface waterAnimals
{
    public function needs();
}

class Dock implements waterAnimals
{
    public function needs()
    {
        return "can swim";
    }
}

class RobotDock implements waterAnimals
{
    public $value;

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function needs()
    {
        return "can swim with " . $this->value;
    }
}



