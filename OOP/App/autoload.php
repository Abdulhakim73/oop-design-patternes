<?php

/*
not recommending
    require "CP.php";
    require "Office.php";
    require "Table.php";
*/

// recommending
spl_autoload_register(function ($class){
    include 'App/'. $class. 'php';
});
