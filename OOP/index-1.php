<?php

// class
class Car
{
    //property, attributes
    public string $model;

    //methods
    public function getModel($drive)
    {
        return $this->model = $drive;
    }
}

//object
$bmw = new Car();
$bmw->getModel("bmw 23352");
echo $bmw->model;




