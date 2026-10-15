<?php
// para que el programa coja los tipos estrictos.
declare(strict_types=1);
class Coche{
    public $marca;
    public $modelo;
    public $velocidad;

    function __construct($marca, $modelo, $velocidad){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }

    function acelerar (int $cantidad){
        $this->velocidad += $cantidad;
    }

    function frenar(int $cantidad){
        $this->velocidad -= $cantidad;
    }

    function mostrarInfo(): string{
       return ("El coche con marca: " . $this->marca . "\nModelo: " . $this->modelo .  "\nTiene una velocidad total de: " . $this->velocidad . "\n");
    }
}

$peugeot = new Coche("Peugeot", 206, 30);
echo $peugeot->mostrarInfo();
$peugeot->acelerar(30);
echo $peugeot->mostrarInfo();
$peugeot->frenar(20);
echo $peugeot->mostrarInfo();



