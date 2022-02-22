<?php

/* EXERCISE 1
Create a class beverage. ok
Create the properties color (string), price (float) and temperature (string) and also foresee a construct. ok
Have a default value "cold" in the construct for temperature.ok
Remember for now we will use properties and methods that can be accessed from everywhere. ok
Make a getInfo function which returns "This beverage is <temperature> and <color>." ok
Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
print the getInfo on the screen. ok
Print the temperature on the screen. ok
USE TYPEHINTING EVERYWHERE! ?
*/

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
    // The functions
    public function getInfo() 
    {   
        return "This beverage is $this->temperature, $this->color";
    }
}
//create new object
$cola = new Beverage("black", 2);

echo $cola->getInfo(); 
echo $cola->temperature;
