<?php
 
 abstract class Animal
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    abstract public function getNoise();


}

class Dog extends Animal
{
    public function getNoise()
    {
       return "El perro " .  $this-> name ." hace GUAU";
    }
}

class Cat extends Animal
{
    public function getNoise()
    {
       return "El gato " .  $this-> name ." hace MIAU";
    }
}



