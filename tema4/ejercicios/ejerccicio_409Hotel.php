<?php 
include 'ejercicio_409Habitacion.php';

class Hotel {
    private string $nombre;
    private array $habitaciones;
    private array $reservas;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
        $this->habitaciones = [];
        $this->reservas = [];
    }
    
    public function getNombre():string{
        return $this->nombre;
    }

    public function agregarHabitacion(Habitacion $habitacion):void{
        $this->habitaciones[] = $habitacion;
    }

    public functionç reservar(string $cliente, int $numHabitacion, DateTimeImmutable $entrada, DateTimeImmutable $salida ): Reserva{
        $this->reservas[] = $reserva;
    }
}