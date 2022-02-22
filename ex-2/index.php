<?php
declare(strict_types=1);
require './class-beer.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//create new object
// TODO:set the temperature to cold automatically
$duvel = new Beer ('blond ', 5, '  ','Duvel ', 8.5);

// TODO: Make sure that each print is on a different line.
// TODO: Try to get this error on the screen= Fatal error: Uncaught Error: 
        // Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
echo $duvel->color;
echo $duvel->price;
echo $duvel->temperature; //not set for now, see todo.
echo $duvel->name;

echo $duvel->alcoholPc;
echo $duvel->getPercentage();
echo $duvel->getTemperature();