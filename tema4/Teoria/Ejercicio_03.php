<?php

class Vehicle
{
    protected string $brand;
    protected int $num_wheels;
    private int $cv;


    function __construct(string $brand = "", int $num_wheels = 0, int $cv = 0)
    {
        $this->brand = $brand;
        $this->num_wheels = $num_wheels;
        $this->cv = $cv;
    }

    function setBrand(string $brand){
        $this->brand = $brand;
    }

    function setNum_wheels(int $num_wheels){
        $this->num_wheels = $num_wheels;
    }

    function setCv(int $cv){
        $this->cv = $cv;
    }

    function getBrand ():string{
        return $this->brand;
    }

    function getNum_Wheels ():int{
        return $this->num_wheels; 
    }

    function getCv ():int{
        return $this->cv;
    }

    function mostrarInfo(): string
    {
        return ("El vehiculo es de la marca: " . $this->brand .
            "\nTiene: " . $this->num_wheels . " ruedas, " . $this->cv . " caballos"
        );
    }
}

class Car extends Vehicle
{
    private int $doors;


    function __construct(string $brand = "", int $num_wheels, int $cv = 0, int $doors = 0)
    {
        parent::__construct($brand, $num_wheels = 4, $cv);

        $this->doors = $doors;
    }
    function mostrarInfo(): string
    {
        return parent::mostrarInfo() . " y " . $this->doors . " puertas.\n";
    }
}

class Motorbike extends Vehicle
{

    function __construct(string $brand = "", int $cv = 0)
    {
        return parent::__construct($brand, $num_wheels = 2, $cv);
    }


    function mostrarInfo(): string
    {
        return parent::mostrarInfo();
    }
}

$peugeot = new Car("206", 4, 90, 5);
/* echo $peugeot->mostrarInfo(); */

$kawasaki = new Motorbike("ninja", 200);
/* echo $kawasaki->mostrarInfo(); */

$vehiculos = [];
$vehiculos[] = $peugeot;
$vehiculos[] = $kawasaki;

foreach ($vehiculos as $vehiculo) {
    if($vehiculo instanceof Motorbike)
    echo $vehiculo->mostrarInfo();
};
