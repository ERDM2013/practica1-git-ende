<?php

class Coche{
    public $marca;
    public $modelo;
    public $velocidad;

    function __construct($marca, $modelo, $velocidad){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }

    function acelerar ($cantidad){
        $this -> velocidad += $cantidad;
    }

    function frenar($cantidad){
        $this -> velocidad -= $cantidad;
    }

    function mostrarInfo() : string{
        echo("El coche con marca: " . $this->marca . "\n modelo: " . $this->modelo . "tiene una velocidad de: " . $this->velocidad);
    }
}

$peugeot = new Coche(Peugeot, 206, 30);
$peugeot->acelerar(30);
$peugeot->mostrarInfo();



