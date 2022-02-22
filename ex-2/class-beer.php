<?php
declare(strict_types=1);
require './class-beverage.php';

class Beer extends Beverage
{
    public string $name;
    public float $alcoholPc;

    // The Constructor with incoming parameters in the brackets
    public function __construct($color, $price, $temperature = 'cold', string $name, float $alcoholPc) 
    {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPc = $alcoholPc;
    }
    // The functions
    public function getPercentage() 
    {   
        return "$this->alcoholPc";
    }
    public function getTemperature()
    {
        return "$this->temperature";
    }
}