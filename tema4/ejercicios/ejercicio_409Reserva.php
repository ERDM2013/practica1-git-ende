<?php

class Reserva{
    private string $cliente;
    private Habitacion $habitacion;
    private DateTimeImmutable $entrada;
    private DateTimeImmutable $salida;

    public function __construct(string $cliente, Habitacion $habitacion, DateTimeImmutable $entrada, DateTimeImmutable $salida)
    {
       $this->cliente = $cliente;
       $this->habitacion = $habitacion;
       $this->entrada = $entrada;
       $this->salida = $salida;
    }

    public function getCliente():string{
        return $this->cliente;
    }

    public function getHabitacion():array{
        return $this->habitacion;
    }

    public function noches():int{
        $interval = $this->entrada->diff($this->salida);
        return $interval->days;
    }

    public function importe():float{

    $total = $this->habitacion->calcularPrecio($this->noches);
    return $total;

    }

    public function solapaCon(DateTimeImmutable $entrada, DateTimeImmutable $salida){
        if($entrada < $this->salida || $salida < $this->entrada){
            return true;
        }else{
            return false;
        }
    }

    public function __toString()
    {
       
        return "El cliente: " . $this->cliente . " ha reservado la habitacion: " . $this->habitacion->getNumero() . 
                "\n entrada: " . $this->entrada->format('Y-m-d') . 
                "\n salida: " . $this->salida->format('Y-m-d') .
                "\n Total noches: " . $this->noches() .
                "\n, Total precio: " . $this->importe() . "€";
        
        
    }
}
