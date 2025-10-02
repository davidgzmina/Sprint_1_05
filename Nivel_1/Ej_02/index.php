<?php

require 'shape.php';



$triangulo1 = new Triangulo(5,10);
$rectangulo1 = new Rectangulo(5,10);



echo $triangulo1 -> calcularArea($triangulo1) . PHP_EOL; 
echo $rectangulo1 -> calcularArea($rectangulo1); 

?>

