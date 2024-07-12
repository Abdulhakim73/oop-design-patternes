<?php 

//Asosan interface yoki abstract bilan ishlatilinadi
// shakillarni hisoblash misolida

interface Figure 
{
    function getSurface(): float;
}

class Tortburchak implements Figure
{
    public function __construct(private float $a, private float $b){}

    function getSurface(): float
    {
        return $this->a * $this->b;
    }
}

class Uchburchak implements Figure
{
    public function __construct(private float $a, private float $h){}

    function getSurface(): float
    {
        return $this->a * $this->h / 2;
    }
}

class Printer
{
    public function displaySurface(Figure $figure): string
    {
        return $figure->getSurface();
    }
}

$b = new Printer();
echo $b->displaySurface(new Tortburchak(5,6));

//second way
$d = new Uchburchak(5,6);
echo $d->getSurface();

