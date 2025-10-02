<?php

abstract class Shape
{
    public $ancho;
    public $alto;
    
     public function __construct($ancho,$alto)
    {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }

    abstract public function calcularArea();

}


class Rectangulo extends Shape
{
    public function calcularArea()
    {
        $area = $this->alto * $this ->ancho;
        return "El rectangulo con una altura de " . $this-> alto . " metros y un ancho de " .  $this-> ancho . 
        " metros tiene una area de " . $area . " metros cuadrados."; 
    }
}

class Triangulo extends Shape
{
    public function calcularArea()
    {
        $area = ($this->alto * $this->ancho)/2; 
        return "El triangulo con una altura de " . $this-> alto . " metros y un ancho de " . 
         $this-> ancho . " metros tiene una area de "
        . $area . " metros cuadrados.";
    }
}

