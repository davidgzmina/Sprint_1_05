<?php
require 'animal.php';
/*
Necessitem crear un tipus de dades que representi un animal.
Els animals tenen un nom i "parlen". Hem de tenir en compte, però, 
que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple.
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests 
comportaments entre diferents animals.

Crea almenys 2 animals.
*/



$dog1 = new Dog("Paquirrin");
$cat1 = new  Cat("Adolfito");

echo  $dog1 -> getNoise() . "\n";
echo $cat1 -> getNoise();


?> 
