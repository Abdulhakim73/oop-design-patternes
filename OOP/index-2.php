<?php

class Home {
    public $model;
    public $year;

    //constructor
    public function __construct($model, $year)
    {
        $this->model = $this->model($model);
        $this->year = $this->year($year);
    }

    public function model($model){
        return "model: " . $model;
    }
    public function year($year){
        return "year: ". $year;  
    }
}

var_dump (new Home("wegewgweg", '1998'));
var_dump (new Home("hello", "y328"));
