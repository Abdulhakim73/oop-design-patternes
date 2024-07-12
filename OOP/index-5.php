<?php

//we can't create object from abstract class, we can only extend
abstract class Electronic {
    public $headphone;
   public function __construct($headphone)
   {
    return $this->headphone = $headphone;
   }
   //when we type abstract method, this method have to be in child's classes too!
   abstract public function getCalonka();
}

class CarElectronic extends Electronic {
    
    public function gethead()
    {
        return $this->headphone;
    }

    public function getCalonka()
    {
        return "already got";
    }
}

$electronic = new CarElectronic("something");
echo $electronic->gethead();



