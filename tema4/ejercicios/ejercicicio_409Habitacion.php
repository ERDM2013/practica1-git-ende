<?php

abstract class Habitacion
{
    protected int $numero;
    protected float $precioNoche;

    function __construct(int $numero, float $precioNoche)
    {
        $this->numero = $numero;
        $this->precioNoche = $precioNoche;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    abstract function calcularPrecio(int $noches): float;

    public function describir(): string
    {
        return "La habitación " . $this->numero . " El precio por noche es: " . $this->precioNoche;
    }
}


class HabitacionIndividual extends Habitacion
{

    public function calcularPrecio(int $noches): float
    {
        return $noches * $this->precioNoche;
    }

    #[Override]
    public function describir(): string
    {
        return parent::describir();
    }
}

class HabitacionDoble extends Habitacion
{
    protected bool $desayunoIncluido;

    #[Override]
    public function __construct(int $numero, float $precioNoche, bool $desayunoIncluido)
    {
        parent::__construct($numero, $precioNoche);
        $this->desayunoIncluido = $desayunoIncluido;
    }

    #[Override]
    public function calcularPrecio(int $noches): float
    {
        if($this->desayunoIncluido){
            return ($noches * $this->precioNoche) + 12;
        }else{
            return $noches * $this->precioNoche;
        }
        
    }

    #[Override]
    public function describir(): string
    {
        if ($this->desayunoIncluido) {
            return parent::describir() . " con desayuno incluido.";
        } else {
            return parent::describir() . " sin desayuno incluido";
        }
    }
}

class Suite extends HabitacionDoble
{
    private bool $tieneJacuzzi;
    #[Override]
    public function __construct(int $numero, float $precioNoche, bool $desayunoIncluido, bool $tieneJacuzzi)
    {
        parent::__construct($numero, $precioNoche, $desayunoIncluido);
        $this->tieneJacuzzi = $tieneJacuzzi;
    }

    #[Override]
    public function calcularPrecio(int $noches): float
    {
         if($this->tieneJacuzzi){
            return (parent::calcularPrecio($noches) * 1.5) + 25;
        }else{
             return parent::calcularPrecio($noches) * 1.5;
        }
      
    }

    #[Override]
    public function describir(): string
    {
        if ($this->tieneJacuzzi) {
            return parent::describir() . " con desayuno y jacuzzi.";
        } else {
            return parent::describir() . " sin desayuno ni jacuzzi.";
        }
    }
}



