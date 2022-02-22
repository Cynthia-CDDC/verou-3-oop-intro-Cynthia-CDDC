<?php
declare(strict_types=1);

class Beverage {
    // The Properties
    public $color;
    public $price;
    public $temperature;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct($color, $price, $temperature = 'cold') 
    {
        $this->color = $color; 
        $this->price = $price;
        $this->temperature = $temperature;
    }
}


