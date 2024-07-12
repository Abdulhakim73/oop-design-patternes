<?php 

class Dog 
{
    //attributelar xavfsiz turishi uchun ularni private qilamiz, ularni ozgartirish uchun public method yaratamiz
    // va shu classni chaqirib public methodlar orqali attributelarimizga ozgartirishlar kiritamiz
    private float $weight = 1;
     private string $mood = "good";

     public function setWeight($value)
     {
        return $this->weight = $value;
     }

     public function getWeight()
     {
        return $this->weight;
     }

     public function setMood($value)
     {
        return $this->mood = $value;
     }

     public function getMood()
     {
        return $this->mood;
     }
}

$dog = new Dog();
echo $dog->getWeight();
