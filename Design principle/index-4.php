<?php

// masalan biron bir class yaratdik ichiga attribute berdik va shu attributeni boshqa classda turib chaqirdik,
// keyin uni attributeini nomini ozgartirsak boshqa classdan ham ozgartirishimiz kerak osha chaqirilgan attributeni
// shuning oldini olish uchun attributeni method ichiga tiqib qoyamiz

class Computer
{
    private string $label;

    public function setName(string $name): void
    {
        $this->label = $name;
    }

    public function getName():string
    {
        return $this->label;
    }
}

class Human
{
    public Computer $computer;

    public function CallCp(): string
    {
        return $this->computer->getName();
    }
}


$human = new Human();
$human->computer = new Computer();
$human->computer->setName('Hp');
echo $human->CallCp();

