<?php 

class Clothes{

    public $color;
    protected $size;
    private $cotton;

    public function __construct($color, $size, $cotton)
    {
        $this->color = $color;
        $this->size = $size;
        $this->cotton = $cotton;
    }

    public function checkColor()
    {
        return "checking color";
    }

    protected function checkSize()
    {
        return "checking size";
    }

    private function checkContton()
    {
        return "checking Cotton";
    }
}

class outSideColthes extends Clothes 
{
    public function getColor()
    {
        return $this->color;
    }

    public function getSize()
    {
        return $this->size;
    }
}


$clothes = new Clothes("blue", '45', 'werg');
$outSideColthes = new OutSideColthes("red", 56, 'heavy');

echo $outSideColthes->getSize();